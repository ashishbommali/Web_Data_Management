<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicationDispensation;


class MedicationDispensationController extends Controller
{
    //
    public function index(){
        return MedicationDispensation::all();
    }

    public function create(Request $request)
    {
        $medicationDispensation = new MedicationDispensation;
        $medicationDispensation->patient = $request->patient;
        $medicationDispensation->dosage = $request->dosage;
        $medicationDispensation->medication = $request->medication;
        $medicationDispensation->date = $request->date;
        $medicationDispensation->timestamps = false;
        $medicationDispensation->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $medicationDispensation
        ]);

    }
  
}
