<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\User;
use Illuminate\Http\Request;

class ComputerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return $computers;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = COmputer::create($request->all());
        return response()->json([
            "data" => $computer,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return response()->json([
            'data' => $computer,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());
        return response()->json([
            'data' => $computer,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json("Eli", 204);
    }
}
