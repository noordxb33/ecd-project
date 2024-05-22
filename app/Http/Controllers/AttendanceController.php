<?php
// app/Http/Controllers/AttendanceController.php
namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return Attendance::with('student')->get();
    }

    public function store(Request $request)
    {
        $attendance = Attendance::create($request->all());
        return response()->json($attendance, 201);
    }

    public function show(Attendance $attendance)
    {
        return $attendance->load('student');
    }

    public function update(Request $request, Attendance $attendance)
    {
        $attendance->update($request->all());
        return response()->json($attendance, 200);
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return response()->json(null, 204);
    }
}
