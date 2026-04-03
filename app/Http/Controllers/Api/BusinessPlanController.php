<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessPlanController extends Controller
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

    // GET /api/business/missions/{id}/plans
    public function index(Request $request, string $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $plans = DB::table('plans')
            ->where('mission_id', $id)
            ->orderBy('montant')
            ->get();

        return response()->json(['success' => true, 'data' => $plans]);
    }

    // POST /api/business/missions/{id}/plans
    public function store(Request $request, string $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'montant'     => 'required|numeric|min:0',
            'duree'       => 'required|integer|min:1',
            'unite_duree' => 'required|in:jours,mois,annees',
        ]);

        $pid = (string) Str::uuid();

        DB::table('plans')->insert([
            'id_plan'     => $pid,
            'montant'     => $validated['montant'],
            'duree'       => $validated['duree'],
            'unite_duree' => $validated['unite_duree'],
            'mission_id'  => $id,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Plan créé',
            'data'    => DB::table('plans')->where('id_plan', $pid)->first(),
        ], 201);
    }

    // PUT /api/business/missions/{id}/plans/{pid}
    public function update(Request $request, string $id, string $pid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $plan = DB::table('plans')
            ->where('id_plan', $pid)
            ->where('mission_id', $id)
            ->first();

        if (! $plan) {
            return response()->json(['success' => false, 'message' => 'Plan introuvable'], 404);
        }

        $validated = $request->validate([
            'montant'     => 'sometimes|numeric|min:0',
            'duree'       => 'sometimes|integer|min:1',
            'unite_duree' => 'sometimes|in:jours,mois,annees',
        ]);

        $validated['updated_at'] = now();
        DB::table('plans')->where('id_plan', $pid)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Plan mis à jour',
            'data'    => DB::table('plans')->where('id_plan', $pid)->first(),
        ]);
    }

    // DELETE /api/business/missions/{id}/plans/{pid}
    public function destroy(Request $request, string $id, string $pid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $rows = DB::table('plans')
            ->where('id_plan', $pid)
            ->where('mission_id', $id)
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Plan introuvable'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Plan supprimé']);
    }
}
