<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientHealthRecord;

class PatientHealthRecordController extends Controller
{
    //
    public function index(){
        return PatientHealthRecord::all();
    }

    public function create(Request $request)
    {
        $patientHealthRecord = new PatientHealthRecord;
        $patientHealthRecord->patient = $request->patient;
        $patientHealthRecord->name = $request->name;
        $patientHealthRecord->age = $request->age;
        $patientHealthRecord->height = $request->height;
        $patientHealthRecord->address = $request->address;
        $patientHealthRecord->medicalHistory = $request->medicalHistory;
        $patientHealthRecord->conditions = $request->conditions;
        $patientHealthRecord->medication = $request->medication;
        $patientHealthRecord->timestamps = false;
        $patientHealthRecord->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $patientHealthRecord
        ]);
    }

    public function update(Request $request, $id)
    {
        $patientHealthRecord = PatientHealthRecord::find($id);
        $patientHealthRecord->patient = $request->patient;
        $patientHealthRecord->name = $request->name;
        $patientHealthRecord->age = $request->age;
        $patientHealthRecord->height = $request->height;
        $patientHealthRecord->address = $request->address;
        $patientHealthRecord->medicalHistory = $request->medicalHistory;
        $patientHealthRecord->conditions = $request->conditions;
        $patientHealthRecord->medication = $request->medication;
        $patientHealthRecord->timestamps = false;
        $patientHealthRecord->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $patientHealthRecord
        ]);
    }

    public function delete($id)
    {
        $patientHealthRecord = PatientHealthRecord::find($id);
        $patientHealthRecord->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $patientHealthRecord
        ]);
    }
}
