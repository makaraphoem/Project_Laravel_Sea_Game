<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\ShowUserRecource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $users =  ShowUserRecource::collection($users);
        return response()->json(['Get user success'=>true, 'data'=>$users], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
       $user = User::store($request);
       return response()->json(['Create user success'=>true, 'data'=>$user], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $user = new ShowUserRecource($user);
        return response()->json(['Show user by id success'=>true, 'data'=>$user], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::store($request, $id);
        return response()->json(['Create user success'=>true, 'data'=>$user], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['Delete user success'=>true, 'data'=>$user], 200);
    }
}
