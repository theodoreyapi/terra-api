<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessModePaiementController extends Controller
{
    private function getMissionOrFail(string $missionId, string $businessId)
    {
        $mission = DB::table('missions')
            ->where('id_mission', $missionId)
            ->where('created_by', $businessId)
            ->first();

        if (! $mission) {
            abort(404, 'Mission introuvable');
        }

        return $mission;
    }

    // GET /api/business/missions/{id}/modes-paiement
    /**
     * Lister les modes de paiement d'une mission
     *
     * Récupère tous les moyens de paiement configurés pour une mission.
     *
     * @group Business Paiements
     * @authenticated
     *
     * @urlParam id string required ID de la mission. Example: 8f3a-uuid
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_mode_paiemnt": "uuid",
     *       "provider": "wave",
     *       "actif": true
     *     }
     *   ]
     * }
     */
    public function index(Request $request, string $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $modes = DB::table('modes_paiement')
            ->where('mission_id', $id)
            ->orderBy('provider')
            ->get();

        return response()->json(['success' => true, 'data' => $modes]);
    }

    // POST /api/business/missions/{id}/modes-paiement
    /**
     * Ajouter un mode de paiement
     *
     * Permet d’ajouter un provider de paiement à une mission.
     *
     * @group Business Paiements
     * @authenticated
     *
     * @urlParam id string required ID de la mission
     *
     * @bodyParam provider string required Fournisseur de paiement. Example: wave. Enum: wave,orange,moov,mtn,visa
     * @bodyParam actif boolean Activer immédiatement le mode. Example: true
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Mode de paiement ajouté",
     *   "data": {
     *     "id_mode_paiemnt": "uuid",
     *     "provider": "wave",
     *     "actif": true
     *   }
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Ce mode de paiement existe déjà"
     * }
     */
    public function store(Request $request, string $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'provider' => 'required|in:wave,orange,moov,mtn,visa',
            'actif'    => 'boolean',
        ]);

        $exists = DB::table('modes_paiement')
            ->where('mission_id', $id)
            ->where('provider', $validated['provider'])
            ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Ce mode de paiement (' . $validated['provider'] . ') existe déjà pour cette mission',
            ], 422);
        }

        $mid = (string) Str::uuid();

        DB::table('modes_paiement')->insert([
            'id_mode_paiemnt' => $mid,
            'provider'        => $validated['provider'],
            'actif'           => $validated['actif'] ?? true,
            'mission_id'      => $id,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mode de paiement ajouté',
            'data'    => DB::table('modes_paiement')->where('id_mode_paiemnt', $mid)->first(),
        ], 201);
    }

    // DELETE /api/business/missions/{id}/modes-paiement/{mid}
    /**
     * Supprimer un mode de paiement
     *
     * Supprime un provider de paiement d’une mission.
     *
     * @group Business Paiements
     * @authenticated
     *
     * @urlParam id string required ID mission
     * @urlParam mid string required ID mode de paiement
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Mode de paiement supprimé"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Mode de paiement introuvable"
     * }
     */
    public function destroy(Request $request, string $id, string $mid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $rows = DB::table('modes_paiement')
            ->where('id_mode_paiemnt', $mid)
            ->where('mission_id', $id)
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Mode de paiement introuvable'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Mode de paiement supprimé']);
    }
}
