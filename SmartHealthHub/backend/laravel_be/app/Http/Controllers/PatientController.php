<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;
use App\Models\Allergy;
use App\Models\Suregery as Surgery;
use App\Models\FamilyHistory;
use App\Models\VitalSign;
use App\Models\ExcerciseData;
use App\Models\MedicationReminder;

class PatientController extends Controller
{
    public function addIllness(Request $request)
    {
        $illness = new Illness();
        $illness->illness = $request->illness;
        $illness->patient = $request->patient;
        $illness->timestamps = false;
        $illness->save();

        return response()->json([
            'message' => 'Illness added successfully'
        ]);
    }

    public function addAllergy(Request $request)
    {
        $allergy = new Allergy();
        $allergy->allergy = $request->allergy;
        $allergy->patient = $request->patient;
        $allergy->timestamps = false;
        $allergy->save();

        return response()->json([
            'message' => 'Allergy added successfully'
        ]);
    }

    public function addSurgery(Request $request)
    {
        $surgery = new Surgery();
        $surgery->surgery = $request->surgery;
        $surgery->patient = $request->patient;
        $surgery->timestamps = false;
        $surgery->save();

        return response()->json([
            'message' => 'Surgery added successfully'
        ]);
    }

    public function addFamilyHistory(Request $request)
    {
        $familyHistory = new FamilyHistory();
        $familyHistory->familyHistory = $request->familyHistory;
        $familyHistory->patient = $request->patient;
        $familyHistory->timestamps = false;
        $familyHistory->save();

        return response()->json([
            'message' => 'Family history added successfully'
        ]);
    }

    public function getPatientMedicalHistory($patient)
    {
        $illnesses = Illness::where('patient', $patient)->get();
        $allergies = Allergy::where('patient', $patient)->get();
        $surgeries = Surgery::where('patient', $patient)->get();
        $familyHistories = FamilyHistory::where('patient', $patient)->get();

        return response()->json([
            'illnesses' => $illnesses,
            'allergies' => $allergies,
            'surgeries' => $surgeries,
            'familyHistories' => $familyHistories
        ]);
    }

    public function addVitalSign(Request $request)
    {
        $vitalSigns = new VitalSign();
        $vitalSigns->date = $request->date;
        $vitalSigns->temperature = $request->temperature;
        $vitalSigns->bloodPressure = $request->bloodPressure;
        $vitalSigns->heartRate = $request->heartRate;
        $vitalSigns->weight = $request->weight;
        $vitalSigns->patient = $request->patient;
        $vitalSigns->timestamps = false;
        $vitalSigns->save();

        return response()->json([
            'message' => 'Vital signs added successfully'
        ]);
    }

    public function getVitalSigns($patient)
    {
        $vitalSigns = VitalSign::where('patient', $patient)->get();

        return response()->json([
            'vitalSigns' => $vitalSigns
        ]);
    }

    public function addExcerciseData(Request $request)
    {
        $excerciseData = new ExcerciseData();
        $excerciseData->date = $request->date;
        $excerciseData->duration = $request->duration;
        $excerciseData->calorieBurned = $request->caloriesBurned;
        $excerciseData->patient = $request->patient;
        $excerciseData->activity = $request->activity;
        $excerciseData->timestamps = false;
        $excerciseData->save();

        return response()->json([
            'message' => 'Excercise data added successfully'
        ]);
    }

    public function getExcerciseData($patient)
    {
        $excerciseData = ExcerciseData::where('patient', $patient)->get();

        return response()->json([
            'excerciseData' => $excerciseData
        ]);
    }

    public function deleteExcerciseData($id)
    {
        $excerciseData = ExcerciseData::find($id);
        $excerciseData->delete();

        return response()->json([
            'message' => 'Excercise data deleted successfully'
        ]);
    }

    public function addMedicationReminder(Request $request)
    {
        $medicationReminder = new MedicationReminder();
        $medicationReminder->dosage = $request->dosage;
        $medicationReminder->time = $request->time;
        $medicationReminder->name = $request->name;
        $medicationReminder->patient = $request->patient;
        $medicationReminder->timestamps = false;
        $medicationReminder->save();

        return response()->json([
            'message' => 'Medication reminder added successfully'
        ]);
    }

    public function getMedicationReminders($patient)
    {
        $medicationReminders = MedicationReminder::where('patient', $patient)->get();

        return response()->json([
            'medicationReminders' => $medicationReminders
        ]);
    }

    public function deleteMedicationReminder($id)
    {
        $medicationReminder = MedicationReminder::find($id);
        $medicationReminder->delete();

        return response()->json([
            'message' => 'Medication reminder deleted successfully'
        ]);
    }

    public function updateMedicationReminder(Request $request, $id)
    {
        $medicationReminder = MedicationReminder::find($id);
        $medicationReminder->dosage = $request->dosage;
        $medicationReminder->time = $request->time;
        $medicationReminder->name = $request->name;
        $medicationReminder->timestamps = false;
        $medicationReminder->save();

        return response()->json([
            'message' => 'Medication reminder updated successfully'
        ]);
    }

}
