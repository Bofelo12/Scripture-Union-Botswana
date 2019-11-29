<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function eventsCalendar()
    {
       // $event = Event::all()->toArray();
       // return view('event.event', compact('event'));
       $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $url = "events/edit/".$value->id;
                $events[] = Calendar::event(
                    $value->event_name,
                    false,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => $url,
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        //print_r($events);
        return view('events.events_calendar', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date'    =>  'required',
            'time'     =>  'required',
        ]);
        $event = new Event([
            'event_date'    =>  $request->get('date'),
            'event_time'     =>  $request->get('time'),
            'event_venue' => $request->get('venue'),
            'event_date' => $request->get('date'),
            'event_name' => $request->get('event_name')    
        ]);
        $event->save();
        return redirect()->route("eventMenu")->with('success', "Data added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('id','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [ 
            'start_date'    =>  'required',
            'end_date'    =>  'required',
            'location'    =>  'required',
            'title'     =>  'required'
        ]);
        $event = Event::find($id);
        $event->event_name = $request->get('title');
        $event->event_venue = $request->get('location');
        $event->start_date = $request->get('start_date');
        $event->end_date = $request->get('end_date');
        $event->save();
            return redirect()->route('editEvent',['id'=>$id])->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
    }
}
