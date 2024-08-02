<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|max:100',
            'gender' => 'required|in:male,female',
            'birth_date' => 'nullable|date',
            'religion' => 'nullable|string|max:10',
            'phone_number' => 'nullable|string|max:50',
            'address' => 'nullable|string',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|max:100',
            'gender' => 'required|in:male,female',
            'birth_date' => 'nullable|date',
            'religion' => 'nullable|string|max:10',
            'phone_number' => 'nullable|string|max:50',
            'address' => 'nullable|string',
        ]);

        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}