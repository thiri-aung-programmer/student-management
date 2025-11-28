<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentAddRequest;
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
    })->paginate(7);
    
    return view("students.index",compact("students"));
   }

   public function create(StudentAddRequest $request){

   
    $student=new Student();
    $student->name = $request->name;
    $student->email = $request->email;
    $student->gender = $request->gender;
    $student->age= $request->age;
    $student->date_of_birth= $request->date_of_birth;
    $student->score = $request->score;
    $student->save();
    return redirect('student');
}
public function edit($id)
{
    $student=Student::findOrFail($id);
    return view('students.edit',compact('student'));
}
public function update(Request $request, $id){
    $student=Student::findOrFail($id);
    $student->name = $request->name;
    $student->email = $request->email;
    $student->gender = $request->gender;
    $student->age= $request->age;
    $student->date_of_birth= $request->date_of_birth;
    $student->score = $request->score;
    $student->update();
    return redirect('student');
}
public function destroy($id){
    Student::findOrFail($id)->delete();
    return redirect('student');
}
}