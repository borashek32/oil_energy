<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('welcome', compact('departments'));
    }

    public function partners($department_id = 0)
    {
        $partners['data'] = Partner::where('department_id', $department_id)->get();

        return response()->json($partners);
    }

}
