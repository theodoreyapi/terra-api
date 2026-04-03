<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentLangueController extends Controller
{
    // GET /api/agent/langues
    public function index(Request $request)
    {
        $agent   = $request->attributes->get('agent');
        $langues = DB::table('langue_agent as la')
            ->join('langues as l', 'la.langue_id', '=', 'l.id_langue')
            ->where('la.agent_id', $agent->id_agent)
            ->select('la.id_langue_agent', 'l.id_langue', 'l.name_langue')
            ->get();

        return response()->json(['success' => true, 'data' => $langues]);
    }

    // POST /api/agent/langues
    public function store(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $request->validate([
            'langue_id' => 'required|uuid|exists:langues,id_langue',
        ]);

        $exists = DB::table('langue_agent')
            ->where('agent_id', $agent->id_agent)
            ->where('langue_id', $request->langue_id)
            ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Cette langue est déjà ajoutée à votre profil',
            ], 422);
        }

        $id = (string) Str::uuid();

        DB::table('langue_agent')->insert([
            'id_langue_agent' => $id,
            'langue_id'       => $request->langue_id,
            'agent_id'        => $agent->id_agent,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        $langue = DB::table('langue_agent as la')
            ->join('langues as l', 'la.langue_id', '=', 'l.id_langue')
            ->where('la.id_langue_agent', $id)
            ->select('la.id_langue_agent', 'l.id_langue', 'l.name_langue')
            ->first();

        return response()->json([
            'success' => true,
            'message' => 'Langue ajoutée',
            'data'    => $langue,
        ], 201);
    }

    // DELETE /api/agent/langues/{id}
    public function destroy(Request $request, string $id)
    {
        $agent = $request->attributes->get('agent');

        $rows = DB::table('langue_agent')
            ->where('id_langue_agent', $id)
            ->where('agent_id', $agent->id_agent)
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Langue introuvable'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Langue supprimée']);
    }
}
