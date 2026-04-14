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
    /**
     * Inscription d’un business
     *
     * @group Auth Business
     *
     * @bodyParam name_business string required Nom du responsable. Example: Yapi
     * @bodyParam prenom_business string required Prénom du responsable. Example: Theodore
     * @bodyParam phone_business string required Numéro de téléphone. Example: 0700000000
     * @bodyParam email_business string required Email personnel. Example: yapi@mail.com
     * @bodyParam entreprise_business string required Nom de l’entreprise. Example: YapiTech
     * @bodyParam email_entreprise_business string required Email entreprise. Example: contact@yapitech.com
     * @bodyParam password string required Mot de passe (min 6 caractères)
     * @bodyParam password_confirmation string required Confirmation du mot de passe
     * @bodyParam secteur_id string required UUID du secteur
     * @bodyParam city_id string required UUID de la ville
     * @bodyParam country_id string required UUID du pays
     * @bodyParam localisation_entreprise_business string Localisation de l’entreprise
     * @bodyParam description_business string Description
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Compte business créé. Vérifiez votre téléphone/email.",
     *   "data": {
     *     "id_business": "uuid",
     *     "email_business": "yapi@mail.com"
     *   }
     * }
     */
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
    /**
     * Connexion business
     *
     * @group Auth Business
     *
     * @bodyParam email_business string required Email. Example: yapi@mail.com
     * @bodyParam password string required Mot de passe
     *
     * @response 200 {
     *   "success": true,
     *   "token": "token_string",
     *   "data": {
     *     "id_business": "uuid",
     *     "name_business": "Yapi",
     *     "entreprise_business": "YapiTech",
     *     "email_business": "yapi@mail.com",
     *     "status": "active"
     *   }
     * }
     *
     * @response 401 {
     *   "success": false,
     *   "message": "Identifiants incorrects"
     * }
     *
     * @response 403 {
     *   "success": false,
     *   "message": "Compte inactif ou suspendu"
     * }
     */
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
    /**
     * Déconnexion business
     *
     * @group Auth Business
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Déconnexion réussie"
     * }
     */
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
    /**
     * Envoyer un OTP
     *
     * @group Auth Business
     *
     * @bodyParam phone_business string required Numéro de téléphone. Example: 0700000000
     *
     * @response 200 {
     *   "success": true,
     *   "message": "OTP envoyé"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Numéro introuvable"
     * }
     */
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
    /**
     * Vérifier OTP
     *
     * @group Auth Business
     *
     * @bodyParam phone_business string required Numéro. Example: 0700000000
     * @bodyParam otp integer required Code OTP. Example: 123456
     *
     * @response 200 {
     *   "success": true,
     *   "message": "OTP vérifié",
     *   "token": "token_string"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "OTP invalide"
     * }
     */
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
    /**
     * Mot de passe oublié
     *
     * @group Auth Business
     *
     * @bodyParam email_business string required Email. Example: yapi@mail.com
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Code de réinitialisation envoyé"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Email introuvable"
     * }
     */
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
    /**
     * Réinitialiser le mot de passe
     *
     * @group Auth Business
     *
     * @bodyParam email_business string required Email
     * @bodyParam otp integer required Code OTP
     * @bodyParam password string required Nouveau mot de passe
     * @bodyParam password_confirmation string required Confirmation
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Mot de passe réinitialisé avec succès"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Code invalide ou expiré"
     * }
     */
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
    /**
     * Profil du business connecté
     *
     * @group Business Profil
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_business": "uuid",
     *     "name_business": "Yapi",
     *     "prenom_business": "Theodore",
     *     "phone_business": "0700000000",
     *     "email_business": "yapi@mail.com",
     *     "entreprise_business": "YapiTech",
     *     "email_entreprise_business": "contact@yapitech.com",
     *     "localisation_entreprise_business": "Abidjan",
     *     "description_business": "Entreprise tech",
     *     "status": "active",
     *     "name_city": "Abidjan",
     *     "name_country": "Côte d'Ivoire",
     *     "name_secteur": "Technologie"
     *   }
     * }
     */
    public function me(Request $request)
    {
        $business = $request->attributes->get('business');

        $data = DB::table('business as b')
            ->leftJoin('city as c', 'b.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'b.country_id', '=', 'co.id_country')
            ->leftJoin('secteur_activite as s', 'b.secteur_id', '=', 's.id_secteur')
            ->where('b.id_business', $business->id_business)
            ->select(
                'b.id_business',
                'b.name_business',
                'b.prenom_business',
                'b.phone_business',
                'b.email_business',
                'b.entreprise_business',
                'b.email_entreprise_business',
                'b.localisation_entreprise_business',
                'b.description_business',
                'b.status',
                'c.name_city',
                'co.name as name_country',
                's.name_secteur'
            )
            ->first();

        return response()->json(['success' => true, 'data' => $data]);
    }

    // PUT /api/business/me
    /**
     * Mettre à jour le profil business
     *
     * @group Business Profil
     *
     * @authenticated
     *
     * @bodyParam name_business string Nom
     * @bodyParam prenom_business string Prénom
     * @bodyParam phone_business string Téléphone
     * @bodyParam localisation_entreprise_business string Localisation
     * @bodyParam description_business string Description
     * @bodyParam city_id string UUID ville
     * @bodyParam country_id string UUID pays
     * @bodyParam secteur_id string UUID secteur
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Profil mis à jour",
     *   "data": {
     *     "id_business": "uuid",
     *     "name_business": "Yapi"
     *   }
     * }
     */
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
