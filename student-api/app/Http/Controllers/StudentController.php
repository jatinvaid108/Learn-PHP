<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // GET ALL STUDENTS
    public function index()
    {
        $students = Student::all();

        return response()->json($students);
    }

    // STORE NEW STUDENT
    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]);

        return response()->json([
            'message' => 'Student created successfully',
            'data' => $student
        ], 201);
    }

    // GET SINGLE STUDENT
    public function show(string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        return response()->json($student);
    }

    // UPDATE STUDENT
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]);

        return response()->json([
            'message' => 'Student updated successfully',
            'data' => $student
        ]);
    }

    // DELETE STUDENT
    public function destroy(string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully'
        ]);
    }
}
