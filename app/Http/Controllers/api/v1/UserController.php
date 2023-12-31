<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\UserStoreRequest;
use App\Http\Requests\api\v1\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\UserStoreRequest;
use App\Http\Resources\api\v1\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //relacion de uno a muchos entre usuarios y computadoras.
    public function index()
    {
        $users = User::orderBy('id', 'asc')->get();
        return response()->json(['data'=> UserResource::collection($users)], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'data' => new UserResource($user)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id)
    {
        $user = User::findOrFail($user_id);
        return response()->json(['data'=>new UserResource($user)], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'data'=> new UserResource($user)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
