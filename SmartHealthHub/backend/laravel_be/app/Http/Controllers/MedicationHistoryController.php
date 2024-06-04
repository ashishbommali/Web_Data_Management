<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicationHistory;

class MedicationHistoryController extends Controller
{
    //
    public function index(){
        return MedicationHistory::all();
    }

    public function create(Request $request)
    {
        $medicationHistory = new MedicationHistory;
        $medicationHistory->patient = $request->patient;
        $medicationHistory->dosage = $request->dosage;
        $medicationHistory->medication = $request->medication;
        $medicationHistory->duration = $request->duration;
        $medicationHistory->condtitions = $request->condtitions;
        $medicationHistory->frequency = $request->frequency;
        $medicationHistory->timestamps = false;
        $medicationHistory->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $medicationHistory
        ]);

    }
}
