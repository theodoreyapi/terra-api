<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgentProfileController extends Controller
{
    // GET /api/agent/profile
    public function show(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $profile = DB::table('agents as a')
            ->leftJoin('diplomes as d', 'a.diplome_id', '=', 'd.id_diplome')
            ->leftJoin('etudes as e', 'a.etude_id', '=', 'e.id_etude')
            ->leftJoin('city as c', 'a.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'a.country_id', '=', 'co.id_country')
            ->leftJoin('commune as cm', 'a.commune_id', '=', 'cm.id_commune')
            ->where('a.id_agent', $agent->id_agent)
            ->select(
                'a.id_agent','a.genre_agent','a.name_agent','a.lastname_agent',
                'a.profession_agent','a.naissance_agent','a.email_agent','a.phone_agent',
                'a.image_agent','a.longitude_agent','a.latitude_agent',
                'a.experience_mission_agent','a.permis_agent','a.status',
                'd.id_diplome','d.name_diplome',
                'e.id_etude','e.name_etude',
                'c.id_city','c.name_city',
                'co.id_country','co.name as name_country',
                'cm.id_commune','cm.name_commune'
            )
            ->first();

        $profile->langues    = DB::table('langue_agent as la')
            ->join('langues as l', 'la.langue_id', '=', 'l.id_langue')
            ->where('la.agent_id', $agent->id_agent)
            ->select('la.id_langue_agent', 'l.id_langue', 'l.name_langue')
            ->get();

        $profile->pieces     = DB::table('pieces')->where('agent_id', $agent->id_agent)->get();
        $profile->permis     = DB::table('permis')->where('agent_id', $agent->id_agent)->get();
        $profile->diplomes   = DB::table('photo_diplome')->where('agent_id', $agent->id_agent)->get();

        return response()->json(['success' => true, 'data' => $profile]);
    }

    // PUT /api/agent/profile
    public function update(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $validated = $request->validate([
            'genre_agent'              => 'sometimes|in:M,F',
            'name_agent'               => 'sometimes|string|max:255',
            'lastname_agent'           => 'sometimes|string|max:255',
            'profession_agent'         => 'sometimes|string|max:255',
            'naissance_agent'          => 'sometimes|date',
            'phone_agent'              => 'sometimes|string|unique:agents,phone_agent,' . $agent->id_agent . ',id_agent',
            'longitude_agent'          => 'nullable|string',
            'latitude_agent'           => 'nullable|string',
            'experience_mission_agent' => 'sometimes|in:oui,non',
            'permis_agent'             => 'sometimes|in:oui,non',
            'city_id'                  => 'sometimes|uuid|exists:city,id_city',
            'country_id'               => 'sometimes|uuid|exists:country,id_country',
            'commune_id'               => 'sometimes|uuid|exists:commune,id_commune',
            'diplome_id'               => 'sometimes|uuid|exists:diplomes,id_diplome',
            'etude_id'                 => 'sometimes|uuid|exists:etudes,id_etude',
        ]);

        $validated['updated_at'] = now();
        DB::table('agents')->where('id_agent', $agent->id_agent)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profil mis à jour avec succès',
            'data'    => DB::table('agents')->where('id_agent', $agent->id_agent)->first(),
        ]);
    }

    // POST /api/agent/profile/image
    public function uploadImage(Request $request)
    {
        $agent = $request->attributes->get('agent');
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048']);

        $path = $request->file('image')->store('agents/photos', 'public');

        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'image_agent' => $path,
            'updated_at'  => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Photo mise à jour',
            'data'    => ['image_agent' => Storage::url($path)],
        ]);
    }
}

// ─────────────────────────────────────────────
// AgentPieceController
// ─────────────────────────────────────────────
namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentPieceController extends Controller
{
    // GET /api/agent/pieces
    public function index(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $pieces = DB::table('pieces')->where('agent_id', $agent->id_agent)->get();
        return response()->json(['success' => true, 'data' => $pieces]);
    }

    // POST /api/agent/pieces
    public function store(Request $request)
    {
        $agent = $request->attributes->get('agent');
        $request->validate([
            'recto_piece' => 'required|image|mimes:jpeg,png,jpg,pdf|max:3072',
            'verso_piece' => 'required|image|mimes:jpeg,png,jpg,pdf|max:3072',
        ]);

        $recto = $request->file('recto_piece')->store('agents/pieces', 'public');
        $verso = $request->file('verso_piece')->store('agents/pieces', 'public');

        $id = (string) Str::uuid();
        DB::table('pieces')->insert([
            'id_piece'   => $id,
            'recto_piece'=> $recto,
            'verso_piece'=> $verso,
            'agent_id'   => $agent->id_agent,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pièce ajoutée',
            'data'    => DB::table('pieces')->where('id_piece', $id)->first(),
        ], 201);
    }

    // PUT /api/agent/pieces/{id}
    public function update(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');
        $piece = DB::table('pieces')->where('id_piece', $id)->where('agent_id', $agent->id_agent)->first();

        if (! $piece) {
            return response()->json(['success' => false, 'message' => 'Pièce introuvable'], 404);
        }

        $data = [];
        if ($request->hasFile('recto_piece')) {
            $data['recto_piece'] = $request->file('recto_piece')->store('agents/pieces', 'public');
        }
        if ($request->hasFile('verso_piece')) {
            $data['verso_piece'] = $request->file('verso_piece')->store('agents/pieces', 'public');
        }

        if (empty($data)) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier fourni'], 422);
        }

        $data['updated_at'] = now();
        DB::table('pieces')->where('id_piece', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Pièce mise à jour',
            'data'    => DB::table('pieces')->where('id_piece', $id)->first(),
        ]);
    }
}

// ─────────────────────────────────────────────
// AgentPermisController
// ─────────────────────────────────────────────
class AgentPermisController extends Controller
{
    // GET /api/agent/permis
    public function index(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $permis = DB::table('permis')->where('agent_id', $agent->id_agent)->get();
        return response()->json(['success' => true, 'data' => $permis]);
    }

    // POST /api/agent/permis
    public function store(Request $request)
    {
        $agent = $request->attributes->get('agent');
        $request->validate([
            'recto_permis' => 'required|image|mimes:jpeg,png,jpg,pdf|max:3072',
            'verso_permis' => 'required|image|mimes:jpeg,png,jpg,pdf|max:3072',
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

        return response()->json([
            'success' => true,
            'message' => 'Permis ajouté',
            'data'    => DB::table('permis')->where('id_permis', $id)->first(),
        ], 201);
    }

    // PUT /api/agent/permis/{id}
    public function update(Request $request, $id)
    {
        $agent  = $request->attributes->get('agent');
        $permis = DB::table('permis')->where('id_permis', $id)->where('agent_id', $agent->id_agent)->first();

        if (! $permis) {
            return response()->json(['success' => false, 'message' => 'Permis introuvable'], 404);
        }

        $data = [];
        if ($request->hasFile('recto_permis')) {
            $data['recto_permis'] = $request->file('recto_permis')->store('agents/permis', 'public');
        }
        if ($request->hasFile('verso_permis')) {
            $data['verso_permis'] = $request->file('verso_permis')->store('agents/permis', 'public');
        }
        if (empty($data)) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier fourni'], 422);
        }
        $data['updated_at'] = now();
        DB::table('permis')->where('id_permis', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Permis mis à jour',
            'data'    => DB::table('permis')->where('id_permis', $id)->first(),
        ]);
    }
}

// ─────────────────────────────────────────────
// AgentDiplomeController
// ─────────────────────────────────────────────
class AgentDiplomeController extends Controller
{
    // GET /api/agent/diplomes
    public function index(Request $request)
    {
        $agent    = $request->attributes->get('agent');
        $diplomes = DB::table('photo_diplome')->where('agent_id', $agent->id_agent)->get();
        return response()->json(['success' => true, 'data' => $diplomes]);
    }

    // POST /api/agent/diplomes
    public function store(Request $request)
    {
        $agent = $request->attributes->get('agent');
        $request->validate([
            'recto_diplome' => 'required|image|mimes:jpeg,png,jpg,pdf|max:3072',
            'verso_diplome' => 'required|image|mimes:jpeg,png,jpg,pdf|max:3072',
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

        return response()->json([
            'success' => true,
            'message' => 'Diplôme ajouté',
            'data'    => DB::table('photo_diplome')->where('id_photo_diplome', $id)->first(),
        ], 201);
    }

    // PUT /api/agent/diplomes/{id}
    public function update(Request $request, $id)
    {
        $agent   = $request->attributes->get('agent');
        $diplome = DB::table('photo_diplome')->where('id_photo_diplome', $id)->where('agent_id', $agent->id_agent)->first();

        if (! $diplome) {
            return response()->json(['success' => false, 'message' => 'Diplôme introuvable'], 404);
        }

        $data = [];
        if ($request->hasFile('recto_diplome')) {
            $data['recto_diplome'] = $request->file('recto_diplome')->store('agents/diplomes', 'public');
        }
        if ($request->hasFile('verso_diplome')) {
            $data['verso_diplome'] = $request->file('verso_diplome')->store('agents/diplomes', 'public');
        }
        if (empty($data)) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier fourni'], 422);
        }
        $data['updated_at'] = now();
        DB::table('photo_diplome')->where('id_photo_diplome', $id)->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Diplôme mis à jour',
            'data'    => DB::table('photo_diplome')->where('id_photo_diplome', $id)->first(),
        ]);
    }
}

// ─────────────────────────────────────────────
// AgentLangueController
// ─────────────────────────────────────────────
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
        $request->validate(['langue_id' => 'required|uuid|exists:langues,id_langue']);

        $exists = DB::table('langue_agent')
            ->where('agent_id', $agent->id_agent)
            ->where('langue_id', $request->langue_id)
            ->exists();

        if ($exists) {
            return response()->json(['success' => false, 'message' => 'Langue déjà ajoutée'], 422);
        }

        $id = (string) Str::uuid();
        DB::table('langue_agent')->insert([
            'id_langue_agent' => $id,
            'langue_id'       => $request->langue_id,
            'agent_id'        => $agent->id_agent,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Langue ajoutée'], 201);
    }

    // DELETE /api/agent/langues/{id}
    public function destroy(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');
        $rows  = DB::table('langue_agent')
            ->where('id_langue_agent', $id)
            ->where('agent_id', $agent->id_agent)
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Langue introuvable'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Langue supprimée']);
    }
}
