<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        return Fee::with('student')->get();
    }

    public function store(Request $request)
    {
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
