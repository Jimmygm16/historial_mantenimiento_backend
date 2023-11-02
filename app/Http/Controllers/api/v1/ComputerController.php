<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\ComputerStoreRequest;
use App\Http\Requests\api\v1\ComputerUpdateRequest;
use App\Http\Resources\api\v1\ComputerResource;

class ComputerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return response()->json(['data' => ComputerResource::collection($computers)], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerStoreRequest $request)
    {
        $computer = Computer::create($request->all());
        return response()->json([
            "data" => $computer,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer_id)
    {
        $computer = Computer::findOrFail($computer_id);
        return response()->json([
            'data' => new ComputerResource($computer),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputerUpdateRequest $request, Computer $computer)
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
