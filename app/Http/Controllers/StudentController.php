<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('index')->with('students', $students);
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|max:15',
            'registration_id' => 'required|unique:students',
            'department_name' => 'required'
        ], [
            'name.required' => 'Name can not be empty',
            'name.max' => 'Your name can not contain more than 15 ch',

            'registration_id.reuired' => 'Registration id can not be empty',
            'registration_id.unique' => 'Registration id must be unique',
            'department_name.required' => 'Department name can not be empty'
        ]);

        // Insert data
        $student = new Student();

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;

        $student->save();
        Session::flash('msg', 'Data successfully added');
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        // Validate
        $request->validate([
            'name' => 'required|max:15',
            'registration_id' => 'required|unique:students',
            'department_name' => 'required'
        ], [
            'name.required' => 'Name can not be empty',
            'name.max' => 'Your name can not contain more than 15 ch',

            'registration_id.reuired' => 'Registration id can not be empty',
            'registration_id.unique' => 'Registration id must be unique',
            'department_name.required' => 'Department name can not be empty'
        ]);

        $student = Student::findOrFail($id);

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;

        $student->save();
        Session::flash('msg', 'Data successfully Updated');
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $delete = Student::findOrFail($id);
        $delete->delete();
        Session::flash('msg', 'Data successfully Deleted');
        return redirect()->route('home');
    }
}
