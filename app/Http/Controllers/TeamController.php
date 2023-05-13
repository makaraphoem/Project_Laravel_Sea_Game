<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Http\Resources\ShowTeamRecource;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return response()->json(['Get team success'=>true, 'data'=>$teams], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $team = Team::store($request);
        return response()->json(['Create team success'=>true, 'data'=>$team], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::find($id);
        $team = new ShowTeamRecource($team);
        return response()->json(['Show team by id success'=>true, 'data'=>$team], 201);
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id)
    {
        $team = Team::store($request, $id);
        return response()->json(['Create team success'=>true, 'data'=>$team], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return response()->json(['Delete team success'=>true, 'data'=>$team], 200);
    }
}
