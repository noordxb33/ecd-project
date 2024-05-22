<?php
// app/Http/Controllers/TeacherController.php
namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        return Teachers::with('grade')->get();
    }

    public function store(Request $request)
    {
        $teacher = Teachers::create($request->all());
        return response()->json($teacher, 201);
    }

    public function show(Teachers $teacher)
    {
        return $teacher->load('grade');
    }

    public function update(Request $request, Teachers $teacher)
    {
        $teacher->update($request->all());
        return response()->json($teacher, 200);
    }

    public function destroy(Teachers $teacher)
    {
        $teacher->delete();
        return response()->json(null, 204);
    }
}
