<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Event $event)
    {
    return view('events.index')->with(['events' => $event->getPaginateByLimit()]);
    }
    
       public function show(Event $event)
    {
    return view('events.show')->with(['event' => $event]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
    return view('events.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Event $event, EventRequest $request)
    {
       $input = $request['event'];
       $input += ['user_id' => $request->user()->id];
       $event->fill($input)->save();
      return view('events.index')->with(['events' => $event->getPaginateByLimit()]); //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit')->with(['event' => $event]);//
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, Event $event)
    {
       $input_event = $request['event'];
       $input_event += ['user_id' => $request->user()->id];
       $event->fill($input_event)->save();

       return redirect('/events/' . $event->id); //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function delete(Event $event)
    {
        $event->delete();
        return redirect('/event/');
        //
    }
}