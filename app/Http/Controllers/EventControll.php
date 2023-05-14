<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Resources\ShowEventRecource;
use App\Models\Event;
use App\Models\Team;
use Illuminate\Http\Request;

class EventControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $name = request('name');
        $events = Event::where('name', 'like', '%'.$name.'%')->get();
        $events =  ShowEventRecource::collection($events);
        return response()->json(['Get event success'=>true, 'data'=>$events], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
       
        $event = Event::store($request);
        return response()->json(['Create event success'=>true, 'data'=>$event], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);
        $event = new ShowEventRecource($event);
        return response()->json(['Show event by id success'=>true, 'data'=>$event], 201);
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, string $id)
    {
        $event = Event::store($request, $id);
        return response()->json(['Create event success'=>true, 'data'=>$event], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        $event->delete();
        return response()->json(['Delete event success'=>true, 'data'=>$event], 200);
    }
}
