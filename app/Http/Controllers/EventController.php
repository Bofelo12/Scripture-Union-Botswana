<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
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
        $data = Event::all();
        return DataTables::of($data)
        ->addColumn("action",function($data){
            /**
             * <a href=""    class="btn btn-sm btn-warning">
                 <span class="hidden-xs hidden-sm">View</span>
                </a> 
             */
            return 
            '<center>                 
                <a href="'.route('editEvent',['id'=>$data->id]).'"  class="btn btn-sm btn-primary">
                <span class="hidden-xs hidden-sm">Edit</span>
                </a>
                <a href="#" data-id="'.$data->id.'" class="btn btn-sm btn-danger deleteBtn" data-toggle="modal" data-target="#bulk_delete_modal">
                 <span class="hidden-xs hidden-sm">Delete</span>
                </a>                
            </center>'
            ;
        })
        ->make(true);
    }

    public function loadEvents(){
        return view('events.index');
    }
    public function eventsFE(){
        return view('events');
    }

    public function gravy()
{
    return view('/vendor/voyager/gravy');
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

    public function eventsCalendarFE()
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
	                    'color' => 'seagreen',
	                    'url' => 'www.view.event.com',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        //print_r($events);
      // print("hi");
        return view('events.events_calendarFE', compact('calendar'));
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'    =>  'required',
            'venue'     =>  'required',
            'startDate'    =>  'required',
            'endDate'     =>  'required',
        ]);
        $name = Auth()->user()->name;
        $event = new Event([
            'event_name'    =>  $request->get('title'),
            'event_venue'     =>  $request->get('venue'),
            'start_date' => $request->get('startDate'),
            'end_date' => $request->get('endDate'),
            'publisher' => $name
        ]);
        $event->save();
        return redirect()->route("loadEvents")->with('success', "Data added");
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
            'title'    =>  'required',
            'venue'     =>  'required',
            'startDate'    =>  'required',
            'endDate'     =>  'required',
        ]);

        /*
         * 'event_name'    =>  $request->get('title'),
            'event_venue'     =>  $request->get('venue'),
            'start_date' => $request->get('startDate'),
            'end_date' => $request->get('endDate'),
            'publisher' => $name
        */
        $name = Auth()->user()->name;
        $event = Event::find($id);
        $event->event_name = $request->get('title');
        $event->event_venue = $request->get('venue');
        $event->start_date = $request->get('startDate');
        $event->end_date = $request->get('endDate');
        $event->publisher = $name;
        $event->save();
        return redirect()->route("loadEvents")->with('success', "Data added");
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

        return redirect()->route("loadEvents")->with('success', "Data deleted!");
    }
}
