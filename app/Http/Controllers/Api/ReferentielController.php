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
    /**
     * Liste des pays
     *
     * @group Référentiels
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *               "id_country": "d8d79211-37a6-11f1-8ff3-089204256ed6",
     *               "name": "Côte d'Ivoire",
     *               "image": "",
     *               "status": "active",
     *               "created_at": null,
     *               "updated_at": null
     *           }
     *   ]
     * }
     */
    public function pays()
    {
        $pays = DB::table('country')
            ->where('status', 'active')
            ->orderBy('name')
            ->get();

        return response()->json(['success' => true, 'data' => $pays]);
    }

    // GET /api/referentiels/pays/{id}/villes
    /**
     * Liste des villes par pays
     *
     * @group Référentiels
     *
     * @urlParam id string required ID du pays. Exemple: 1
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_city": "b3f1c2a4-1234-5678-9101-abcdef123456",
     *       "name_city": "Abidjan",
     *       "status": "active",
     *       "country_id": "1",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Pays introuvable"
     * }
     */
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
    /**
     * Liste des communes par ville
     *
     * @group Référentiels
     *
     * @urlParam id string required ID de la ville. Exemple: b3f1c2a4-1234
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_commune": "a1b2c3d4-5678-9101-abcdef123456",
     *       "name_commune": "Yopougon",
     *       "status": "active",
     *       "city_id": "b3f1c2a4-1234",
     *       "country_id": "1",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Ville introuvable"
     * }
     */
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
    /**
     * Liste des niveaux d'étude
     *
     * @group Référentiels
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_etude": "1111-2222-3333",
     *       "name_etude": "Licence",
     *       "status": "active",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     */
    public function etudes()
    {
        $etudes = DB::table('etudes')
            ->where('status', 'active')
            ->orderBy('name_etude')
            ->get();

        return response()->json(['success' => true, 'data' => $etudes]);
    }

    // GET /api/referentiels/diplomes
    /**
     * Liste des diplômes
     *
     * @group Référentiels
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_diplome": "1111-2222-3333",
     *       "name_diplome": "Master",
     *       "status": "active",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     */
    public function diplomes()
    {
        $diplomes = DB::table('diplomes')
            ->where('status', 'active')
            ->orderBy('name_diplome')
            ->get();

        return response()->json(['success' => true, 'data' => $diplomes]);
    }

    // GET /api/referentiels/langues
    /**
     * Liste des langues
     *
     * @group Référentiels
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_langue": "1111-2222-3333",
     *       "name_langue": "Français",
     *       "status": "active",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     */
    public function langues()
    {
        $langues = DB::table('langues')
            ->where('status', 'active')
            ->orderBy('name_langue')
            ->get();

        return response()->json(['success' => true, 'data' => $langues]);
    }

    // GET /api/referentiels/secteurs
    /**
     * Liste des secteurs d'activité
     *
     * @group Référentiels
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_secteur": "1111-2222-3333",
     *       "name_secteur": "Informatique",
     *       "status": "active",
     *       "created_at": "2026-01-01 10:00:00",
     *       "updated_at": "2026-01-01 10:00:00"
     *     }
     *   ]
     * }
     */
    public function secteurs()
    {
        $secteurs = DB::table('secteur_activite')
            ->where('status', 'active')
            ->orderBy('name_secteur')
            ->get();

        return response()->json(['success' => true, 'data' => $secteurs]);
    }
}
