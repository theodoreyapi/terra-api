<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BusinessProfileController extends Controller
{
    // GET /api/business/profile
    public function show(Request $request)
    {
        $business = $request->attributes->get('business');

        $data = DB::table('business as b')
            ->leftJoin('city as c', 'b.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'b.country_id', '=', 'co.id_country')
            ->leftJoin('secteur_activite as s', 'b.secteur_id', '=', 's.id_secteur')
            ->where('b.id_business', $business->id_business)
            ->select(
                'b.id_business','b.name_business','b.prenom_business',
                'b.phone_business','b.email_business',
                'b.entreprise_business','b.email_entreprise_business',
                'b.localisation_entreprise_business','b.description_business',
                'b.status','b.created_at',
                'c.id_city','c.name_city',
                'co.id_country','co.name as name_country',
                's.id_secteur','s.name_secteur'
            )
            ->first();

        // Stats rapides
        $data->nb_missions      = DB::table('missions')->where('created_by', $business->id_business)->count();
        $data->missions_actives = DB::table('missions')->where('created_by', $business->id_business)->where('statut', 'actif')->count();

        return response()->json(['success' => true, 'data' => $data]);
    }

    // PUT /api/business/profile
    public function update(Request $request)
    {
        $business = $request->attributes->get('business');

        $validated = $request->validate([
            'name_business'                    => 'sometimes|string|max:255',
            'prenom_business'                  => 'sometimes|string|max:255',
            'phone_business'                   => 'sometimes|string|unique:business,phone_business,' . $business->id_business . ',id_business',
            'localisation_entreprise_business' => 'nullable|string',
            'description_business'             => 'nullable|string',
            'city_id'                          => 'sometimes|uuid|exists:city,id_city',
            'country_id'                       => 'sometimes|uuid|exists:country,id_country',
            'secteur_id'                       => 'sometimes|uuid|exists:secteur_activite,id_secteur',
        ]);

        $validated['updated_at'] = now();
        DB::table('business')->where('id_business', $business->id_business)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profil mis à jour',
            'data'    => DB::table('business')->where('id_business', $business->id_business)->first(),
        ]);
    }

    // POST /api/business/profile/logo
    public function uploadLogo(Request $request)
    {
        $business = $request->attributes->get('business');
        $request->validate(['logo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048']);

        $path = $request->file('logo')->store('business/logos', 'public');

        DB::table('business')->where('id_business', $business->id_business)->update([
            'logo_business' => $path,
            'updated_at'    => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Logo mis à jour',
            'data'    => ['logo_url' => Storage::url($path)],
        ]);
    }
}
