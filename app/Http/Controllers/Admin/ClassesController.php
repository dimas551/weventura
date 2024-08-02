<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view('admin.classes', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'classes_name' => 'nullable|string|max:10',
        ]);

        Classes::create($request->all());

        return redirect()->route('classes.index')->with('success', 'Student created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'classes_name' => 'nullable|string|max:10',
        ]);

        $classes = Classes::find($id);
        $classes->update($request->all());

        return redirect()->route('classes.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $classes = Classes::find($id);
        $classes->delete();

        return redirect()->route('classes.index')->with('success', 'Student deleted successfully.');
    }
}