<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Facility;
use App\Models\Config;

class FacilityController extends Controller
{
    //
    public function index(){
        return Facility::all();
    }

    public function create(Request $request)
    {
        $facility = new Facility;
        $facility->name = $request->name;
        $facility->location = $request->location;
        $facility->service = $request->service;
        $facility->status = $request->status;
        $facility->startTime = $request->startTime;
        $facility->endTime = $request->endTime;
        $facility->timestamps = false;
        $facility->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $facility
        ]);
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::find($id);
        $facility->name = $request->name;
        $facility->location = $request->location;
        $facility->service = $request->service;
        $facility->status = $request->status;
        $facility->startTime = $request->startTime;
        $facility->endTime = $request->endTime;
        $facility->timestamps = false;
        $facility->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $facility
        ]);
    }

    public function delete($id)
    {
        $facility = Facility::find($id);
        $facility->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $facility
        ]);
    }

    public function setConfig(Request $request)
    {
        $config = Config::first();

        if ($config == null) {
            $config = new Config;
        }

        $config->auditTrailEnabled = $request->auditTrailEnabled;
        $config->backupSchedule = $request->backupSchedule;
        $config->dateFormat = $request->dateFormat;
        $config->monitoringThreshold = $request->monitoringThreshold;
        $config->smtpServer = $request->smtpServer;
        $config->theme = $request->theme;
        $config->timestamps = false;
        $config->save();

        return response()->json([
            'message' => 'Config set successfully',
            'data' => $config
        ]);
    }

    public function getConfig()
    {
        $config = Config::first();

        return response()->json([
            'config' => $config
        ]);
    }
}
