<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgentPermisController extends Controller
{
    // GET /api/agent/permis
    /**
     * Liste des permis de conduire de l’agent
     *
     * @group Permis Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_permis": "uuid",
     *       "recto_permis": "agents/permis/recto.jpg",
     *       "verso_permis": "agents/permis/verso.jpg",
     *       "recto_url": "http://localhost/storage/agents/permis/recto.jpg",
     *       "verso_url": "http://localhost/storage/agents/permis/verso.jpg",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     *
     * @response 401 {
     *   "success": false,
     *   "message": "Non authentifié"
     * }
     */
    public function index(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $permis = DB::table('permis')
            ->where('agent_id', $agent->id_agent)
            ->get()
            ->map(function ($p) {
                $p->recto_url = Storage::url($p->recto_permis);
                $p->verso_url = Storage::url($p->verso_permis);
                return $p;
            });

        return response()->json(['success' => true, 'data' => $permis]);
    }

    // POST /api/agent/permis
    /**
     * Ajouter un permis de conduire
     *
     * @group Permis Agent
     *
     * @authenticated
     *
     * @bodyParam recto_permis file required Image ou PDF (jpeg, png, jpg, pdf, max 3MB)
     * @bodyParam verso_permis file required Image ou PDF (jpeg, png, jpg, pdf, max 3MB)
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Permis ajouté",
     *   "data": {
     *     "id_permis": "uuid",
     *     "recto_permis": "agents/permis/recto.jpg",
     *     "verso_permis": "agents/permis/verso.jpg",
     *     "recto_url": "http://localhost/storage/agents/permis/recto.jpg",
     *     "verso_url": "http://localhost/storage/agents/permis/verso.jpg",
     *     "created_at": "2026-01-01 10:00:00"
     *   }
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Erreur de validation"
     * }
     */
    public function store(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $request->validate([
            'recto_permis' => 'required|file|mimes:jpeg,png,jpg,pdf|max:3072',
            'verso_permis' => 'required|file|mimes:jpeg,png,jpg,pdf|max:3072',
        ]);

        $recto = $request->file('recto_permis')->store('agents/permis', 'public');
        $verso = $request->file('verso_permis')->store('agents/permis', 'public');

        $id = (string) Str::uuid();

        DB::table('permis')->insert([
            'id_permis'    => $id,
            'recto_permis' => $recto,
            'verso_permis' => $verso,
            'agent_id'     => $agent->id_agent,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        $permis           = DB::table('permis')->where('id_permis', $id)->first();
        $permis->recto_url = Storage::url($permis->recto_permis);
        $permis->verso_url = Storage::url($permis->verso_permis);

        return response()->json([
            'success' => true,
            'message' => 'Permis ajouté',
            'data'    => $permis,
        ], 201);
    }

    // PUT /api/agent/permis/{id}
    /**
     * Modifier un permis de conduire
     *
     * @group Permis Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID du permis. Exemple: uuid
     *
     * @bodyParam recto_permis file Image ou PDF
     * @bodyParam verso_permis file Image ou PDF
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Permis mis à jour",
     *   "data": {
     *     "id_permis": "uuid",
     *     "recto_permis": "agents/permis/new_recto.jpg",
     *     "verso_permis": "agents/permis/new_verso.jpg",
     *     "recto_url": "http://localhost/storage/agents/permis/new_recto.jpg",
     *     "verso_url": "http://localhost/storage/agents/permis/new_verso.jpg",
     *     "updated_at": "2026-01-01 12:00:00"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Permis introuvable"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Aucun fichier fourni"
     * }
     */
    public function update(Request $request, string $id)
    {
        $agent  = $request->attributes->get('agent');

        $permis = DB::table('permis')
            ->where('id_permis', $id)
            ->where('agent_id', $agent->id_agent)
            ->first();

        if (! $permis) {
            return response()->json(['success' => false, 'message' => 'Permis introuvable'], 404);
        }

        $data = [];

        if ($request->hasFile('recto_permis')) {
            Storage::disk('public')->delete($permis->recto_permis);
            $data['recto_permis'] = $request->file('recto_permis')->store('agents/permis', 'public');
        }
        if ($request->hasFile('verso_permis')) {
            Storage::disk('public')->delete($permis->verso_permis);
            $data['verso_permis'] = $request->file('verso_permis')->store('agents/permis', 'public');
        }

        if (empty($data)) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier fourni'], 422);
        }

        $data['updated_at'] = now();
        DB::table('permis')->where('id_permis', $id)->update($data);

        $updated           = DB::table('permis')->where('id_permis', $id)->first();
        $updated->recto_url = Storage::url($updated->recto_permis);
        $updated->verso_url = Storage::url($updated->verso_permis);

        return response()->json([
            'success' => true,
            'message' => 'Permis mis à jour',
            'data'    => $updated,
        ]);
    }
}
