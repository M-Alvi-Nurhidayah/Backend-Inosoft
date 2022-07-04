<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data
        $data = $request->only('name', 'machine', 'suspension', 'transmission','releasedyear', 'color', 'price');
        $validatedData = $request->validate([
            'name' => 'required|string',
            'machine' => 'required',
            'suspension' => 'required',
            'transmission' => 'required',
            'releasedyear' => 'required|string',
            'color' => 'required|string',
            'price' => 'required'
        ]);

        $vehicle = Vehicle::create([
            'releasedyear' => $validatedData['releasedyear'],
            'color' => $validatedData['color'],
            'price' => $validatedData['price'],
        ]);

        $motor = $vehicle->motors()->create([
            'name' => $validatedData['name'],
            'machine' => $validatedData['machine'],
            'suspension' => $validatedData['suspension'],
            'transmission' => $validatedData['transmission']
        ]);

        //Motor created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Motor created successfully',
            'data' => $motor,
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor $motor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $motor)
    {
        //
    }
}
