<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compliance;

class ComplianceController extends Controller
{
    //
    public function index()
    {
        $compliance = Compliance::all();
        return response()->json($compliance);
    }

    public function create(Request $request)
    {
        $compliance = new Compliance;
        $compliance->department = $request->department;
        $compliance->complianceArea = $request->complianceArea;
        $compliance->complianceStatus = $request->complianceStatus;
        $compliance->lastInspection = $request->name;
        $compliance->taskName = $request->taskName;
        $compliance->taskStatus = $request->taskStatus;
        $compliance->priority = $request->priority;
        $compliance->timestamps = false;
        $compliance->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $compliance
        ]);
    }

    public function update(Request $request, $id)
    {
        $compliance = Compliance::find($id);
        $compliance->department = $request->department;
        $compliance->complianceArea = $request->complianceArea;
        $compliance->complianceStatus = $request->complianceStatus;
        $compliance->lastInspection = $request->name;
        $compliance->taskName = $request->taskName;
        $compliance->taskStatus = $request->taskStatus;
        $compliance->priority = $request->priority;
        $compliance->timestamps = false;
        $compliance->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $compliance
        ]);
    }

    public function delete($id)
    {
        $compliance = Compliance::find($id);
        $compliance->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $compliance
        ]);
    }
}
