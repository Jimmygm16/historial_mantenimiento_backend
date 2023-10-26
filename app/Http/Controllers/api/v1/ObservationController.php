<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\ObservationStoreRequest;
use App\Http\Requests\api\v1\ObservationUpdateRequest;
use App\Http\Resources\api\v1\ObservationResouce;
use App\Models\Observation;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $observations = Observation::where('computer', $id)->get();
        return response()->json([
            'data' => ObservationResouce::collection($observations)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $computer_id, ObservationStoreRequest $request)
    {
        $observation = Observation::create([
            'computer' => $computer_id,
            'message' => request('message'),
            'category' => request('category'),
            'user' => request('user'),
        ]);

        return response()->json([
            'data'=> new ObservationResouce($observation)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer_id, string $observation_id)
    {
        $observation = Observation::where('computer', $computer_id)->where('id', $observation_id)->firstOrFail();

        return response()->json([
            'data' => new ObservationResouce($observation)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $computer_id, string $observation_id, ObservationUpdateRequest $request)
    {
        $observation = Observation::where('computer', $computer_id)->where('id', $observation_id)->firstOrFail();
        $observation->message = request('message');
        $observation->category = request('category');
        $observation->user = request('user');
        $observation->save();

        return response()->json([
            'data' => new ObservationResouce($observation)
        ], 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer_id, string $observation_id)
    {
        $observation = Observation::where('computer', $computer_id)->where('id', $observation_id)->firstOrFail();
        $observation->delete();
        return response()->json(null, 204);
    }
}
