<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Database\Seeders\StudentSeeder;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students=Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'required|min:10'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|min:10'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy( $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted');
    }
}
