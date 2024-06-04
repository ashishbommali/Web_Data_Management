<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthCareProvider;

class HealthCareProviderController extends Controller
{
    //
    public function index(){
        return HealthCareProvider::all();
    }

    public function create(Request $request)
    {
        $healthCareProvider = new HealthCareProvider;
        $healthCareProvider->name = $request->name;
        $healthCareProvider->specialization = $request->specialization;
        $healthCareProvider->status = $request->status;
        $healthCareProvider->timestamps = false;
        $healthCareProvider->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $healthCareProvider
        ]);
    }

    public function update(Request $request, $id)
    {
        $healthCareProvider = HealthCareProvider::find($id);
        $healthCareProvider->name = $request->name;
        $healthCareProvider->specialization = $request->specialization;
        $healthCareProvider->status = $request->status;
        $healthCareProvider->timestamps = false;
        $healthCareProvider->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $healthCareProvider
        ]);
    }

    public function delete($id)
    {
        $healthCareProvider = HealthCareProvider::find($id);
        $healthCareProvider->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $healthCareProvider
        ]);
    }
}
