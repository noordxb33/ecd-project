<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use App\Models\Student;

class FeeController extends Controller
{
    public function index()
    {
        $student = Student::all();
        foreach($student as $st){
            $st->label=$st->first_name;
        }
        return response()->json($student,200);
        return Fee::with('student')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|string',
            'month_id' => 'required|string',
            'year_id' => 'required|string',
            'amount' => 'required|string',
        ]);

        $fee = Fee::create($request->all());
        return response()->json($fee, 201);
    }

    public function show(Fee $fee)
    {
        return $fee->load('student');
    }

    public function update(Request $request, Fee $fee)
    {
        $fee->update($request->all());
        return response()->json($fee, 200);
    }

    public function destroy(Fee $fee)
    {
        $fee->delete();
        return response()->json(null, 204);
    }
}
