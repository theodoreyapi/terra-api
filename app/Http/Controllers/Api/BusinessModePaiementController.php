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
