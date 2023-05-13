<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventTeamRequest;
use App\Models\EventTeam;
use Illuminate\Http\Request;

class EventTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventTeamRequest $request)
    {
        $eventTeam = EventTeam::store($request);
        return response()->json(['Create event team success'=>true, 'data'=>$eventTeam], 201);
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
    public function update(EventTeamRequest $request, string $id)
    {
        $eventTeam = EventTeam::store($request, $id);
        return response()->json(['Create event team success'=>true, 'data'=>$eventTeam], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eventTeam = EventTeam::find($id);
        $eventTeam->delete();
        return response()->json(['Delete event team success'=>true, 'data'=>$eventTeam], 200);
    }
    
}
