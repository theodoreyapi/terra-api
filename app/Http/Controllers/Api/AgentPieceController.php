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
