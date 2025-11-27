<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(Request $request){
    // $students = Student::all();
    $students = Student::when($request->search, function ($query) use ($request) {
    return $query->whereAny(
        ['name', 'age', 'email', 'date_of_birth', 'gender', 'score'],
        'like',
        '%' . $request->search . '%'
    );
    })->get();
    
    return view("students.index",compact("students"));
   }
}

