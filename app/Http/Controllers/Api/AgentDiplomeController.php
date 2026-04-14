<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgentDiplomeController extends Controller
{
    // GET /api/agent/diplomes
    /**
     * Liste des diplômes de l’agent
     *
     * @group Diplômes Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_photo_diplome": "uuid",
     *       "recto_diplome": "agents/diplomes/recto.jpg",
     *       "verso_diplome": "agents/diplomes/verso.jpg",
     *       "recto_url": "http://localhost/storage/agents/diplomes/recto.jpg",
     *       "verso_url": "http://localhost/storage/agents/diplomes/verso.jpg",
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
        $agent    = $request->attributes->get('agent');
        $diplomes = DB::table('photo_diplome')
            ->where('agent_id', $agent->id_agent)
            ->get()
            ->map(function ($d) {
                $d->recto_url = Storage::url($d->recto_diplome);
                $d->verso_url = Storage::url($d->verso_diplome);
                return $d;
            });

        return response()->json(['success' => true, 'data' => $diplomes]);
    }

    // POST /api/agent/diplomes
    /**
     * Ajouter un diplôme
     *
     * @group Diplômes Agent
     *
     * @authenticated
     *
     * @bodyParam recto_diplome file required Image ou PDF (jpeg, png, jpg, pdf, max 3MB)
     * @bodyParam verso_diplome file required Image ou PDF (jpeg, png, jpg, pdf, max 3MB)
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Diplôme ajouté",
     *   "data": {
     *     "id_photo_diplome": "uuid",
     *     "recto_diplome": "agents/diplomes/recto.jpg",
     *     "verso_diplome": "agents/diplomes/verso.jpg",
     *     "recto_url": "http://localhost/storage/agents/diplomes/recto.jpg",
     *     "verso_url": "http://localhost/storage/agents/diplomes/verso.jpg",
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
            'recto_diplome' => 'required|file|mimes:jpeg,png,jpg,pdf|max:3072',
            'verso_diplome' => 'required|file|mimes:jpeg,png,jpg,pdf|max:3072',
        ]);

        $recto = $request->file('recto_diplome')->store('agents/diplomes', 'public');
        $verso = $request->file('verso_diplome')->store('agents/diplomes', 'public');

        $id = (string) Str::uuid();

        DB::table('photo_diplome')->insert([
            'id_photo_diplome' => $id,
            'recto_diplome'    => $recto,
            'verso_diplome'    => $verso,
            'agent_id'         => $agent->id_agent,
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        $diplome           = DB::table('photo_diplome')->where('id_photo_diplome', $id)->first();
        $diplome->recto_url = Storage::url($diplome->recto_diplome);
        $diplome->verso_url = Storage::url($diplome->verso_diplome);

        return response()->json([
            'success' => true,
            'message' => 'Diplôme ajouté',
            'data'    => $diplome,
        ], 201);
    }

    // PUT /api/agent/diplomes/{id}
    /**
     * Modifier un diplôme
     *
     * @group Diplômes Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID du diplôme. Exemple: uuid
     *
     * @bodyParam recto_diplome file Image ou PDF
     * @bodyParam verso_diplome file Image ou PDF
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Diplôme mis à jour",
     *   "data": {
     *     "id_photo_diplome": "uuid",
     *     "recto_diplome": "agents/diplomes/new_recto.jpg",
     *     "verso_diplome": "agents/diplomes/new_verso.jpg",
     *     "recto_url": "http://localhost/storage/agents/diplomes/new_recto.jpg",
     *     "verso_url": "http://localhost/storage/agents/diplomes/new_verso.jpg",
     *     "updated_at": "2026-01-01 12:00:00"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Diplôme introuvable"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Aucun fichier fourni"
     * }
     */
    public function update(Request $request, string $id)
    {
        $agent   = $request->attributes->get('agent');

        $diplome = DB::table('photo_diplome')
            ->where('id_photo_diplome', $id)
            ->where('agent_id', $agent->id_agent)
            ->first();

        if (! $diplome) {
            return response()->json(['success' => false, 'message' => 'Diplôme introuvable'], 404);
        }

        $data = [];

        if ($request->hasFile('recto_diplome')) {
            Storage::disk('public')->delete($diplome->recto_diplome);
            $data['recto_diplome'] = $request->file('recto_diplome')->store('agents/diplomes', 'public');
        }
        if ($request->hasFile('verso_diplome')) {
            Storage::disk('public')->delete($diplome->verso_diplome);
            $data['verso_diplome'] = $request->file('verso_diplome')->store('agents/diplomes', 'public');
        }

        if (empty($data)) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier fourni'], 422);
        }

        $data['updated_at'] = now();
        DB::table('photo_diplome')->where('id_photo_diplome', $id)->update($data);

        $updated           = DB::table('photo_diplome')->where('id_photo_diplome', $id)->first();
        $updated->recto_url = Storage::url($updated->recto_diplome);
        $updated->verso_url = Storage::url($updated->verso_diplome);

        return response()->json([
            'success' => true,
            'message' => 'Diplôme mis à jour',
            'data'    => $updated,
        ]);
    }
}
