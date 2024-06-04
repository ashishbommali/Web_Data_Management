<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\UserTwo;

class AppointmentController extends Controller
{
    //
    public function index()
    {
        $posts=  Appointment::all();
        for ($i=0; $i < count($posts); $i++) { 
            $patient = UserTwo::where('id', $posts[$i]->patient)->get()->first();
            $posts[$i]->patientDetails = $patient;
        }

        return $posts;
    }

    public function create(Request $request)
    {
        $appointment = new Appointment;
        $appointment->patient = $request->patient;
        $appointment->doctorName = $request->doctorName;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->location=$request->location;
        $appointment->provider=$request->provider;
        $appointment->timestamps = false;
        $appointment->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $appointment
        ]);
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->patient = $request->patient;
        $appointment->doctorName = $request->doctorName;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->locatoin=$request->location;
        $appointment->provider=$request->provider;
        $appointment->timestamps = false;
        $appointment->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $appointment
        ]);
    }

    public function delete($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $appointment
        ]);
    }

    public function getByPatient($id)
    {
        $appointment = Appointment::where('patient', $id)->get();
        return response()->json([
            'message' => 'Get Success',
            'data' => $appointment
        ]);
    }
}
