<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    //

    public function reportByUser($id){
        $report = Report::where('user', $id)->get();
        return response()->json($report);

    }

    public function create(Request $request)
    {
        $report = new Report;
        $report->user = $request->user;
        $report->startDate = $request->startDate;
        $report->endDate = $request->endDate;
        if ($request->has('userActivity')) {
            $report->userActivity ="userActivity";
        }

        if ($request->has('healthTrends')) {
            $report->healthTrends = "healthTrends";
        }

        if ($request->has('systemPerformance')) {
            $report->systemPerformance = "systemPerformance";
        }
        $report->timestamps = false;
        $report->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $report
        ]);
    }

}
