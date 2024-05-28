<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;

class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $month = Month::all();
        foreach($month as $m){
            $m->label=$m->month;
        }
        return response()->json($month,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "month"=> "string|required",
            "year_id"=> "integer|required",
        ]);
        $month = Month::create($request->all());
        return response()->json($month,200);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
