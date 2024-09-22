<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        //?1  using raw queries
        // $users = DB::select('select * from users');
        // dd($users);
        //   return view('welcome');
        //? Eloquent ORM 
        // $students = Student::all();
        // // dd($students);
        // foreach ($students as $student) {
        //     # code...
        //     echo $student->name . "<br>";
        // }
        // $student = new Student();
        // $student->name = "John Doe";
        // $student->email = "johndoe@example.com";
        // $student->save();
        $student = Student::where('email', 'johndoe@example.com')->first();
        $student->status = 'active';
        $student->save();
        dd($student);
    }
}
