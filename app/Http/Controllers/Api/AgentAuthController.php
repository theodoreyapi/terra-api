<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AgentAuthController extends Controller
{
    // POST /api/agent/register
    /**
     * Inscription d’un agent
     *
     * @group Auth Agent
     *
     * @bodyParam genre_agent string required Genre (M ou F). Exemple: M
     * @bodyParam name_agent string required Nom. Exemple: Yapi
     * @bodyParam lastname_agent string required Prénom. Exemple: Theodore
     * @bodyParam profession_agent string required Profession. Exemple: Développeur
     * @bodyParam naissance_agent date required Date de naissance. Exemple: 1995-01-01
     * @bodyParam email_agent string required Email. Exemple: test@mail.com
     * @bodyParam phone_agent string required Téléphone. Exemple: 0700000000
     * @bodyParam password string required Mot de passe (min 6 caractères)
     * @bodyParam password_confirmation string required Confirmation mot de passe
     * @bodyParam diplome_id uuid required ID diplôme
     * @bodyParam etude_id uuid required ID étude
     * @bodyParam city_id uuid required ID ville
     * @bodyParam country_id uuid required ID pays
     * @bodyParam commune_id uuid required ID commune
     * @bodyParam experience_mission_agent string required oui ou non
     * @bodyParam permis_agent string required oui ou non
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Compte créé. Veuillez vérifier votre téléphone.",
     *   "data": {
     *     "id_agent": "uuid",
     *     "email_agent": "test@mail.com"
     *   }
     * }
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'genre_agent'              => 'required|string|in:M,F',
            'name_agent'               => 'required|string|max:255',
            'lastname_agent'           => 'required|string|max:255',
            'profession_agent'         => 'required|string|max:255',
            'naissance_agent'          => 'required|date',
            'email_agent'              => 'required|email|unique:agents,email_agent',
            'phone_agent'              => 'required|string|unique:agents,phone_agent',
            'password'                 => 'required|string|min:6|confirmed',
            'diplome_id'               => 'required|uuid|exists:diplomes,id_diplome',
            'etude_id'                 => 'required|uuid|exists:etudes,id_etude',
            'city_id'                  => 'required|uuid|exists:city,id_city',
            'country_id'               => 'required|uuid|exists:country,id_country',
            'commune_id'               => 'required|uuid|exists:commune,id_commune',
            'experience_mission_agent' => 'required|in:oui,non',
            'permis_agent'             => 'required|in:oui,non',
        ]);

        $id  = (string) Str::uuid();
        $otp = rand(100000, 999999);

        DB::table('agents')->insert([
            'id_agent'                 => $id,
            'genre_agent'              => $validated['genre_agent'],
            'name_agent'               => $validated['name_agent'],
            'lastname_agent'           => $validated['lastname_agent'],
            'profession_agent'         => $validated['profession_agent'],
            'naissance_agent'          => $validated['naissance_agent'],
            'email_agent'              => $validated['email_agent'],
            'phone_agent'              => $validated['phone_agent'],
            'password_agent'           => Hash::make($validated['password']),
            'diplome_id'               => $validated['diplome_id'],
            'etude_id'                 => $validated['etude_id'],
            'city_id'                  => $validated['city_id'],
            'country_id'               => $validated['country_id'],
            'commune_id'               => $validated['commune_id'],
            'experience_mission_agent' => $validated['experience_mission_agent'],
            'permis_agent'             => $validated['permis_agent'],
            'otp_agent'                => $otp,
            'status'                   => 'active',
            'created_at'               => now(),
            'updated_at'               => now(),
        ]);

        // Créer le wallet automatiquement
        DB::table('wallets')->insert([
            'id_wallet'  => (string) Str::uuid(),
            'agent_id'   => $id,
            'solde'      => 0,
            'devise'     => 'XOF',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // TODO: Envoyer OTP par SMS

        return response()->json([
            'success' => true,
            'message' => 'Compte créé. Veuillez vérifier votre téléphone.',
            'data'    => ['id_agent' => $id, 'email_agent' => $validated['email_agent']],
        ], 201);
    }

    // POST /api/agent/login
    /**
     * Connexion agent
     *
     * @group Auth Agent
     *
     * @bodyParam email_agent string required Email
     * @bodyParam password string required Mot de passe
     *
     * @response 200 {
     *   "success": true,
     *   "token": "random_token",
     *   "data": {
     *     "id_agent": "uuid",
     *     "name_agent": "Yapi",
     *     "lastname_agent": "Theodore",
     *     "email_agent": "test@mail.com",
     *     "phone_agent": "0700000000",
     *     "status": "active"
     *   }
     * }
     *
     * @response 401 {
     *   "success": false,
     *   "message": "Identifiants incorrects"
     * }
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email_agent' => 'required|email',
            'password'    => 'required|string',
        ]);

        $agent = DB::table('agents')->where('email_agent', $validated['email_agent'])->first();

        if (! $agent || ! Hash::check($validated['password'], $agent->password_agent)) {
            return response()->json(['success' => false, 'message' => 'Identifiants incorrects'], 401);
        }

        if ($agent->status !== 'active') {
            return response()->json(['success' => false, 'message' => 'Compte inactif ou suspendu'], 403);
        }

        $token = Str::random(80);
        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'token_agent' => $token,
            'updated_at'  => now(),
        ]);

        return response()->json([
            'success' => true,
            'token'   => $token,
            'data'    => [
                'id_agent'      => $agent->id_agent,
                'name_agent'    => $agent->name_agent,
                'lastname_agent' => $agent->lastname_agent,
                'email_agent'   => $agent->email_agent,
                'phone_agent'   => $agent->phone_agent,
                'status'        => $agent->status,
            ],
        ]);
    }

    // POST /api/agent/logout
    /**
     * Déconnexion agent
     *
     * @group Auth Agent
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
        $agent = $request->attributes->get('agent');
        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'token_agent' => null,
            'updated_at'  => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Déconnexion réussie']);
    }

    // POST /api/agent/send-otp
    /**
     * Envoyer OTP
     *
     * @group Auth Agent
     *
     * @bodyParam phone_agent string required Numéro téléphone
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
        $request->validate(['phone_agent' => 'required|string']);

        $agent = DB::table('agents')->where('phone_agent', $request->phone_agent)->first();
        if (! $agent) {
            return response()->json(['success' => false, 'message' => 'Numéro introuvable'], 404);
        }

        $otp = rand(100000, 999999);
        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'otp_agent'  => $otp,
            'updated_at' => now(),
        ]);

        // TODO: Envoyer OTP par SMS

        return response()->json(['success' => true, 'message' => 'OTP envoyé']);
    }

    // POST /api/agent/verify-otp
    /**
     * Vérifier OTP
     *
     * @group Auth Agent
     *
     * @bodyParam phone_agent string required
     * @bodyParam otp integer required
     *
     * @response 200 {
     *   "success": true,
     *   "message": "OTP vérifié",
     *   "token": "random_token"
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
            'phone_agent' => 'required|string',
            'otp'         => 'required|integer',
        ]);

        $agent = DB::table('agents')
            ->where('phone_agent', $request->phone_agent)
            ->where('otp_agent', $request->otp)
            ->first();

        if (! $agent) {
            return response()->json(['success' => false, 'message' => 'OTP invalide'], 422);
        }

        $token = Str::random(80);
        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'otp_agent'           => null,
            'token_agent'         => $token,
            'email_verified_at'   => now(),
            'updated_at'          => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'OTP vérifié', 'token' => $token]);
    }

    // POST /api/agent/forgot-password
    /**
     * Mot de passe oublié
     *
     * @group Auth Agent
     *
     * @bodyParam email_agent string required
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
        $request->validate(['email_agent' => 'required|email']);

        $agent = DB::table('agents')->where('email_agent', $request->email_agent)->first();
        if (! $agent) {
            return response()->json(['success' => false, 'message' => 'Email introuvable'], 404);
        }

        $otp = rand(100000, 999999);
        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'otp_agent'  => $otp,
            'updated_at' => now(),
        ]);

        // TODO: Envoyer OTP par email/SMS

        return response()->json(['success' => true, 'message' => 'Code de réinitialisation envoyé']);
    }

    // POST /api/agent/reset-password
    /**
     * Réinitialiser mot de passe
     *
     * @group Auth Agent
     *
     * @bodyParam email_agent string required
     * @bodyParam otp integer required
     * @bodyParam password string required
     * @bodyParam password_confirmation string required
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
            'email_agent' => 'required|email',
            'otp'         => 'required|integer',
            'password'    => 'required|string|min:6|confirmed',
        ]);

        $agent = DB::table('agents')
            ->where('email_agent', $request->email_agent)
            ->where('otp_agent', $request->otp)
            ->first();

        if (! $agent) {
            return response()->json(['success' => false, 'message' => 'Code invalide ou expiré'], 422);
        }

        DB::table('agents')->where('id_agent', $agent->id_agent)->update([
            'password_agent' => Hash::make($request->password),
            'otp_agent'      => null,
            'updated_at'     => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Mot de passe réinitialisé avec succès']);
    }

    // GET /api/agent/me
    /**
     * Profil de l’agent connecté
     *
     * @group Auth Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_agent": "uuid",
     *     "name_agent": "Yapi",
     *     "lastname_agent": "Theodore",
     *     "email_agent": "test@mail.com",
     *     "name_city": "Abidjan",
     *     "name_country": "Côte d'Ivoire",
     *     "name_commune": "Yopougon",
     *     "name_diplome": "Master",
     *     "name_etude": "Licence",
     *     "langues": [
     *       {
     *         "id_langue_agent": "uuid",
     *         "name_langue": "Français"
     *       }
     *     ]
     *   }
     * }
     */
    public function me(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $agentData = DB::table('agents as a')
            ->leftJoin('diplomes as d', 'a.diplome_id', '=', 'd.id_diplome')
            ->leftJoin('etudes as e', 'a.etude_id', '=', 'e.id_etude')
            ->leftJoin('city as c', 'a.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'a.country_id', '=', 'co.id_country')
            ->leftJoin('commune as cm', 'a.commune_id', '=', 'cm.id_commune')
            ->where('a.id_agent', $agent->id_agent)
            ->select(
                'a.*',
                'd.name_diplome',
                'e.name_etude',
                'c.name_city',
                'co.name as name_country',
                'cm.name_commune'
            )
            ->first();

        $langues = DB::table('langue_agent as la')
            ->join('langues as l', 'la.langue_id', '=', 'l.id_langue')
            ->where('la.agent_id', $agent->id_agent)
            ->select('la.id_langue_agent', 'l.name_langue')
            ->get();

        $agentData->langues = $langues;

        return response()->json(['success' => true, 'data' => $agentData]);
    }

    // PUT /api/agent/me
    /**
     * Mettre à jour le profil
     *
     * @group Auth Agent
     *
     * @authenticated
     *
     * @bodyParam name_agent string
     * @bodyParam lastname_agent string
     * @bodyParam phone_agent string
     * @bodyParam profession_agent string
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Profil mis à jour",
     *   "data": {
     *     "id_agent": "uuid",
     *     "name_agent": "Yapi"
     *   }
     * }
     */
    public function update(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $validated = $request->validate([
            'name_agent'               => 'sometimes|string|max:255',
            'lastname_agent'           => 'sometimes|string|max:255',
            'profession_agent'         => 'sometimes|string|max:255',
            'naissance_agent'          => 'sometimes|date',
            'phone_agent'              => 'sometimes|string|unique:agents,phone_agent,' . $agent->id_agent . ',id_agent',
            'longitude_agent'          => 'sometimes|string|nullable',
            'latitude_agent'           => 'sometimes|string|nullable',
            'experience_mission_agent' => 'sometimes|in:oui,non',
            'permis_agent'             => 'sometimes|in:oui,non',
            'city_id'                  => 'sometimes|uuid|exists:city,id_city',
            'country_id'               => 'sometimes|uuid|exists:country,id_country',
            'commune_id'               => 'sometimes|uuid|exists:commune,id_commune',
        ]);

        $validated['updated_at'] = now();
        DB::table('agents')->where('id_agent', $agent->id_agent)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profil mis à jour',
            'data'    => DB::table('agents')->where('id_agent', $agent->id_agent)->first(),
        ]);
    }
}
