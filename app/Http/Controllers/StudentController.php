<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(Request $request){
    $students = Student::all();
    return view("students.index",compact("students"));
   }
}

