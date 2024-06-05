<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Gender::with('students','teachers')->get();
        return response()->json($data,200);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //
         $request->validate([
            "name"=> "string|required",
           
        ]);
        //
        $gender=Gender::create([
            "name"=> $request->name
        ]);
        if(is_null($gender)) {
            return response()->json(['message'=>'an error occured during post request'],404);
        }
        else
        {
            return response()->json($gender,200);
        }
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
