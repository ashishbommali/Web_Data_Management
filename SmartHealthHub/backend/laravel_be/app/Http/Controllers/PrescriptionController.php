<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\prescription;

class PrescriptionController extends Controller
{
    //
    public function index(){
        return prescription::all();
    }

    public function create(Request $request)
    {
        $prescription = new prescription;
        $prescription->patient = $request->patient;
        $prescription->user = $request->user;
        $prescription->medication = $request->medication;
        $prescription->name = $request->name;
        $prescription->dosage = $request->dosage;
        $prescription->frequency = $request->frequency;
        $prescription->notes = $request->notes;
        $prescription->start = $request->start;
        $prescription->end = $request->end;
        $prescription->timestamps = false;
        $prescription->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $prescription
        ]);
    }

    public function update(Request $request, $id)
    {
        $prescription = prescription::find($id);
        $prescription->patient = $request->patient;
        $prescription->user = $request->user;
        $prescription->medication = $request->medication;
        $prescription->name = $request->name;
        $prescription->dosage = $request->dosage;
        $prescription->frequency = $request->frequency;
        $prescription->notes = $request->notes;
        $prescription->start = $request->start;
        $prescription->end = $request->end;
        $prescription->status = $request->status;
        $prescription->timestamps = false;
        $prescription->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $prescription
        ]);
    }

    public function delete($id)
    {
        $prescription = prescription::find($id);
        $prescription->delete();

        return response()->json([
            'message' => 'Delete Success'
        ]);
    }

    public function getByPatient($id)
    {
        $prescription = prescription::where('patient', $id)->get();
        return response()->json([
            'message' => 'Get Success',
            'data' => $prescription
        ]);
    }


}
