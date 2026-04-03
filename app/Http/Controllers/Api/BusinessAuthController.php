<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BusinessAuthController extends Controller
{
    // POST /api/business/register
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name_business'               => 'required|string|max:255',
            'prenom_business'             => 'required|string|max:255',
            'phone_business'              => 'required|string|unique:business,phone_business',
            'email_business'              => 'required|email|unique:business,email_business',
            'entreprise_business'         => 'required|string|unique:business,entreprise_business',
            'email_entreprise_business'   => 'required|email|unique:business,email_entreprise_business',
            'password'                    => 'required|string|min:6|confirmed',
            'secteur_id'                  => 'required|uuid|exists:secteur_activite,id_secteur',
            'city_id'                     => 'required|uuid|exists:city,id_city',
            'country_id'                  => 'required|uuid|exists:country,id_country',
            'localisation_entreprise_business' => 'nullable|string',
            'description_business'        => 'nullable|string',
        ]);

        $id  = (string) Str::uuid();
        $otp = rand(100000, 999999);

        DB::table('business')->insert([
            'id_business'                  => $id,
            'name_business'                => $validated['name_business'],
            'prenom_business'              => $validated['prenom_business'],
            'phone_business'               => $validated['phone_business'],
            'email_business'               => $validated['email_business'],
            'entreprise_business'          => $validated['entreprise_business'],
            'email_entreprise_business'    => $validated['email_entreprise_business'],
            'password_business'            => Hash::make($validated['password']),
            'secteur_id'                   => $validated['secteur_id'],
            'city_id'                      => $validated['city_id'],
            'country_id'                   => $validated['country_id'],
            'localisation_entreprise_business' => $validated['localisation_entreprise_business'] ?? null,
            'description_business'         => $validated['description_business'] ?? null,
            'otp_business'                 => $otp,
            'status'                       => 'active',
            'created_at'                   => now(),
            'updated_at'                   => now(),
        ]);

        // TODO: Envoyer OTP par email/SMS

        return response()->json([
            'success' => true,
            'message' => 'Compte business créé. Vérifiez votre téléphone/email.',
            'data'    => ['id_business' => $id, 'email_business' => $validated['email_business']],
        ], 201);
    }

    // POST /api/business/login
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email_business' => 'required|email',
            'password'       => 'required|string',
        ]);

        $business = DB::table('business')->where('email_business', $validated['email_business'])->first();

        if (! $business || ! Hash::check($validated['password'], $business->password_business)) {
            return response()->json(['success' => false, 'message' => 'Identifiants incorrects'], 401);
        }

        if ($business->status !== 'active') {
            return response()->json(['success' => false, 'message' => 'Compte inactif ou suspendu'], 403);
        }

        $token = Str::random(80);
        DB::table('business')->where('id_business', $business->id_business)->update([
            'token_business' => $token,
            'updated_at'     => now(),
        ]);

        return response()->json([
            'success' => true,
            'token'   => $token,
            'data'    => [
                'id_business'         => $business->id_business,
                'name_business'       => $business->name_business,
                'entreprise_business' => $business->entreprise_business,
                'email_business'      => $business->email_business,
                'status'              => $business->status,
            ],
        ]);
    }

    // POST /api/business/logout
    public function logout(Request $request)
    {
        $business = $request->attributes->get('business');
        DB::table('business')->where('id_business', $business->id_business)->update([
            'token_business' => null,
            'updated_at'     => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Déconnexion réussie']);
    }

    // POST /api/business/send-otp
    public function sendOtp(Request $request)
    {
        $request->validate(['phone_business' => 'required|string']);

        $business = DB::table('business')->where('phone_business', $request->phone_business)->first();
        if (! $business) {
            return response()->json(['success' => false, 'message' => 'Numéro introuvable'], 404);
        }

        $otp = rand(100000, 999999);
        DB::table('business')->where('id_business', $business->id_business)->update([
            'otp_business' => $otp,
            'updated_at'   => now(),
        ]);

        // TODO: Envoyer OTP

        return response()->json(['success' => true, 'message' => 'OTP envoyé']);
    }

    // POST /api/business/verify-otp
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone_business' => 'required|string',
            'otp'            => 'required|integer',
        ]);

        $business = DB::table('business')
            ->where('phone_business', $request->phone_business)
            ->where('otp_business', $request->otp)
            ->first();

        if (! $business) {
            return response()->json(['success' => false, 'message' => 'OTP invalide'], 422);
        }

        $token = Str::random(80);
        DB::table('business')->where('id_business', $business->id_business)->update([
            'otp_business'   => null,
            'token_business' => $token,
            'updated_at'     => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'OTP vérifié', 'token' => $token]);
    }

    // POST /api/business/forgot-password
    public function forgotPassword(Request $request)
    {
        $request->validate(['email_business' => 'required|email']);

        $business = DB::table('business')->where('email_business', $request->email_business)->first();
        if (! $business) {
            return response()->json(['success' => false, 'message' => 'Email introuvable'], 404);
        }

        $otp = rand(100000, 999999);
        DB::table('business')->where('id_business', $business->id_business)->update([
            'otp_business' => $otp,
            'updated_at'   => now(),
        ]);

        // TODO: Envoyer OTP

        return response()->json(['success' => true, 'message' => 'Code de réinitialisation envoyé']);
    }

    // POST /api/business/reset-password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email_business' => 'required|email',
            'otp'            => 'required|integer',
            'password'       => 'required|string|min:6|confirmed',
        ]);

        $business = DB::table('business')
            ->where('email_business', $request->email_business)
            ->where('otp_business', $request->otp)
            ->first();

        if (! $business) {
            return response()->json(['success' => false, 'message' => 'Code invalide ou expiré'], 422);
        }

        DB::table('business')->where('id_business', $business->id_business)->update([
            'password_business' => Hash::make($request->password),
            'otp_business'      => null,
            'updated_at'        => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Mot de passe réinitialisé avec succès']);
    }

    // GET /api/business/me
    public function me(Request $request)
    {
        $business = $request->attributes->get('business');

        $data = DB::table('business as b')
            ->leftJoin('city as c', 'b.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'b.country_id', '=', 'co.id_country')
            ->leftJoin('secteur_activite as s', 'b.secteur_id', '=', 's.id_secteur')
            ->where('b.id_business', $business->id_business)
            ->select(
                'b.id_business','b.name_business','b.prenom_business',
                'b.phone_business','b.email_business','b.entreprise_business',
                'b.email_entreprise_business','b.localisation_entreprise_business',
                'b.description_business','b.status',
                'c.name_city','co.name as name_country','s.name_secteur'
            )
            ->first();

        return response()->json(['success' => true, 'data' => $data]);
    }

    // PUT /api/business/me
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
}
