<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //
    public function index()
    {
        $staff = Staff::all();
        return response()->json($staff);
    }

    public function create(Request $request)
    {
        $staff = new Staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->timestamps = false;
        $staff->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $staff
        ]);
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->timestamps = false;
        $staff->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $staff
        ]);
    }


    public function delete($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        return response()->json([
            'message' => 'Delete Success',
            'data' => $staff
        ]);
    }
}
