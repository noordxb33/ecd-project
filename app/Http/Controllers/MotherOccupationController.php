<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotherOccupation;
class MotherOccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $MotherOccupation = MotherOccupation::all();
        return response()->jsan($MotherOccupation);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Request->validate([  

        "MotherOccupation"=> "string|required",
    ]);

        $MotherOccupation = MotherOccupation::create($request->all());
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
