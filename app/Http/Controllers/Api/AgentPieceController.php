<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgentPieceController extends Controller
{
    // GET /api/agent/pieces
    /**
     * Liste des pièces d’identité de l’agent
     *
     * @group Pièces Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_piece": "uuid",
     *       "recto_piece": "agents/pieces/recto.jpg",
     *       "verso_piece": "agents/pieces/verso.jpg",
     *       "recto_url": "http://localhost/storage/agents/pieces/recto.jpg",
     *       "verso_url": "http://localhost/storage/agents/pieces/verso.jpg",
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
        $pieces = DB::table('pieces')
            ->where('agent_id', $agent->id_agent)
            ->get()
            ->map(function ($p) {
                $p->recto_url = Storage::url($p->recto_piece);
                $p->verso_url = Storage::url($p->verso_piece);
                return $p;
            });

        return response()->json(['success' => true, 'data' => $pieces]);
    }

    // POST /api/agent/pieces
    /**
     * Ajouter une pièce d’identité
     *
     * @group Pièces Agent
     *
     * @authenticated
     *
     * @bodyParam recto_piece file required Image ou PDF (jpeg, png, jpg, pdf, max 3MB)
     * @bodyParam verso_piece file required Image ou PDF (jpeg, png, jpg, pdf, max 3MB)
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Pièce d'identité ajoutée",
     *   "data": {
     *     "id_piece": "uuid",
     *     "recto_piece": "agents/pieces/recto.jpg",
     *     "verso_piece": "agents/pieces/verso.jpg",
     *     "recto_url": "http://localhost/storage/agents/pieces/recto.jpg",
     *     "verso_url": "http://localhost/storage/agents/pieces/verso.jpg",
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
            'recto_piece' => 'required|file|mimes:jpeg,png,jpg,pdf|max:3072',
            'verso_piece' => 'required|file|mimes:jpeg,png,jpg,pdf|max:3072',
        ]);

        $recto = $request->file('recto_piece')->store('agents/pieces', 'public');
        $verso = $request->file('verso_piece')->store('agents/pieces', 'public');

        $id = (string) Str::uuid();

        DB::table('pieces')->insert([
            'id_piece'    => $id,
            'recto_piece' => $recto,
            'verso_piece' => $verso,
            'agent_id'    => $agent->id_agent,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        $piece           = DB::table('pieces')->where('id_piece', $id)->first();
        $piece->recto_url = Storage::url($piece->recto_piece);
        $piece->verso_url = Storage::url($piece->verso_piece);

        return response()->json([
            'success' => true,
            'message' => 'Pièce d\'identité ajoutée',
            'data'    => $piece,
        ], 201);
    }

    // PUT /api/agent/pieces/{id}
    /**
     * Modifier une pièce d’identité
     *
     * @group Pièces Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID de la pièce. Exemple: uuid
     *
     * @bodyParam recto_piece file Image ou PDF
     * @bodyParam verso_piece file Image ou PDF
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Pièce mise à jour",
     *   "data": {
     *     "id_piece": "uuid",
     *     "recto_piece": "agents/pieces/new_recto.jpg",
     *     "verso_piece": "agents/pieces/new_verso.jpg",
     *     "recto_url": "http://localhost/storage/agents/pieces/new_recto.jpg",
     *     "verso_url": "http://localhost/storage/agents/pieces/new_verso.jpg",
     *     "updated_at": "2026-01-01 12:00:00"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Pièce introuvable"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Aucun fichier fourni"
     * }
     */
    public function update(Request $request, string $id)
    {
        $agent = $request->attributes->get('agent');

        $piece = DB::table('pieces')
            ->where('id_piece', $id)
            ->where('agent_id', $agent->id_agent)
            ->first();

        if (! $piece) {
            return response()->json(['success' => false, 'message' => 'Pièce introuvable'], 404);
        }

        $data = [];

        if ($request->hasFile('recto_piece')) {
            Storage::disk('public')->delete($piece->recto_piece);
            $data['recto_piece'] = $request->file('recto_piece')->store('agents/pieces', 'public');
        }
        if ($request->hasFile('verso_piece')) {
            Storage::disk('public')->delete($piece->verso_piece);
            $data['verso_piece'] = $request->file('verso_piece')->store('agents/pieces', 'public');
        }

        if (empty($data)) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier fourni'], 422);
        }

        $data['updated_at'] = now();
        DB::table('pieces')->where('id_piece', $id)->update($data);

        $updated           = DB::table('pieces')->where('id_piece', $id)->first();
        $updated->recto_url = Storage::url($updated->recto_piece);
        $updated->verso_url = Storage::url($updated->verso_piece);

        return response()->json([
            'success' => true,
            'message' => 'Pièce mise à jour',
            'data'    => $updated,
        ]);
    }
}
