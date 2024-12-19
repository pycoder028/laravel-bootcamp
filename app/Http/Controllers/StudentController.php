<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();

        return view('index')->with('students', $students);
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){
        // Insert data
        $student = new Student();

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;

        $student->save();
        return redirect()->route('home');
    }

    public function edit($id){
        $student = Student::findOrFail($id);

        return view('edit')->with('student', $student);
    }

    public function update(Request $request, $id){
        $student = Student::findOrFail($id);

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;

        $student->save();
        return redirect()->route('home');
    }

    public function delete($id){
        $delete = Student::findOrFail($id);
        $delete->delete();

        return redirect()->route('home');
    }

}
