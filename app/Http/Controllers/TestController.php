<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class TestController extends Controller
{


    function index(){

        $data = Student::all();
        return view('test', ['students' => $data]);
    }


}
