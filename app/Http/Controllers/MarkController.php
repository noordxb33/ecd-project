<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        return Mark::with(['student', 'subject', 'grade'])->get();
    }

    public function store(Request $request)
    {
        $mark = Mark::create($request->all());
        return response()->json($mark, 201);
    }

    public function show(Mark $mark)
    {
        return $mark->load(['student', 'subject', 'grade']);
    }

    public function update(Request $request, Mark $mark)
    {
        $mark->update($request->all());
        return response()->json($mark, 200);
    }

    public function destroy(Mark $mark)
    {
        $mark->delete();
        return response()->json(null, 204);
    }
}