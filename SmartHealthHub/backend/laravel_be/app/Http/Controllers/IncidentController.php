<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    //
    public function index()
    {
        $incidents = Incident::all();
        return response()->json($incidents);
    }

    public function create(Request $request)
    {
        $incident = new Incident;
        $incident->title = $request->title;
        $incident->location = $request->location;
        $incident->description = $request->description;
        $incident->date = $request->date;
        $incident->time = $request->time;
        $incident->timestamps = false;
        $incident->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $incident
        ]);
    }

    public function update(Request $request, $id)
    {
        $incident = Incident::find($id);
        $incident->title = $request->title;
        $incident->location = $request->location;
        $incident->description = $request->description;
        $incident->date = $request->date;
        $incident->time = $request->time;
        $incident->timestamps = false;
        $incident->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $incident
        ]);
    }

    public function delete($id)
    {
        $incident = Incident::find($id);
        $incident->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $incident
        ]);
    }
}
