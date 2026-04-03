<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

// ─────────────────────────────────────────────
// ReferentielController
// ─────────────────────────────────────────────
class ReferentielController extends Controller
{
    // GET /api/referentiels/pays
    public function pays()
    {
        $pays = DB::table('country')
            ->where('status', 'active')
            ->orderBy('name')
            ->get();

        return response()->json(['success' => true, 'data' => $pays]);
    }

    // GET /api/referentiels/pays/{id}/villes
    public function villes($id)
    {
        $country = DB::table('country')->where('id_country', $id)->first();
        if (! $country) {
            return response()->json(['success' => false, 'message' => 'Pays introuvable'], 404);
        }

        $villes = DB::table('city')
            ->where('country_id', $id)
            ->where('status', 'active')
            ->orderBy('name_city')
            ->get();

        return response()->json(['success' => true, 'data' => $villes]);
    }

    // GET /api/referentiels/villes/{id}/communes
    public function communes($id)
    {
        $city = DB::table('city')->where('id_city', $id)->first();
        if (! $city) {
            return response()->json(['success' => false, 'message' => 'Ville introuvable'], 404);
        }

        $communes = DB::table('commune')
            ->where('city_id', $id)
            ->where('status', 'active')
            ->orderBy('name_commune')
            ->get();

        return response()->json(['success' => true, 'data' => $communes]);
    }

    // GET /api/referentiels/etudes
    public function etudes()
    {
        $etudes = DB::table('etudes')
            ->where('status', 'active')
            ->orderBy('name_etude')
            ->get();

        return response()->json(['success' => true, 'data' => $etudes]);
    }

    // GET /api/referentiels/diplomes
    public function diplomes()
    {
        $diplomes = DB::table('diplomes')
            ->where('status', 'active')
            ->orderBy('name_diplome')
            ->get();

        return response()->json(['success' => true, 'data' => $diplomes]);
    }

    // GET /api/referentiels/langues
    public function langues()
    {
        $langues = DB::table('langues')
            ->where('status', 'active')
            ->orderBy('name_langue')
            ->get();

        return response()->json(['success' => true, 'data' => $langues]);
    }

    // GET /api/referentiels/secteurs
    public function secteurs()
    {
        $secteurs = DB::table('secteur_activite')
            ->where('status', 'active')
            ->orderBy('name_secteur')
            ->get();

        return response()->json(['success' => true, 'data' => $secteurs]);
    }
}
