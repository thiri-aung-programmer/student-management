<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //variable တွေကြေညာမယ်
    protected $name;
    protected $age;
    public function __construct(){
        $this->name = "My name";
        $this->age = 20;
    }

    public function index(){
        return "Hello From Student Controller";
    }
    public function aboutUs(){
        // return "Hello StudentID $id , $name From AboutUs Of Studnet Controller  ";
        // $name=$this->privateFunction(); // ဒါက private function ထဲကဟာကို ခေါ်တာဒီလိုခေါ်ရင်ရတယ်။၊
        // return view("aboutus",compact("id","name"));
        return $this->name . "and". $this->age;
    }

    //testing Private function ( သူ့ကို create လုပ်ထားတဲ့နေရာကပဲ ခေါ်လို့ရတာ တခြားနေရာကခေါ်လို့မရ)
    private function privateFunction(){
        return "Hello";
    }
}
