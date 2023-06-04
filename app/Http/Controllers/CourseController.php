<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    public function index()
    {

        $data = CourseModel::all();
        // dd($data);

        return view('course.index', compact('data'));
    }

    public function create()
    {
        return view('course.create');
    }
}
