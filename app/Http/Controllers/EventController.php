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
        //nb get by upcoming status
        $data = Event::all();

        $event = array();
        $events = array();
        foreach($data as $i){
          //  $y =$i->start_date->format('Y');
          $s = new \DateTime($i->start_date);
          $month = $s->format('M');
          $day = $s->format('d');
          $year = $s->format('Y');
          $t = $s->format('H:i');
          if($t >= 12){
            $time = $t." PM";
            $event['time'] = $time;
          }
          else{
            $time = $t." AM";
            $event['time'] = $time;
          }          
          $name = $i->event_name;
          $location = $i->event_venue;

          $event['day']  = $day;
          $event['month'] = $month;
          $event['year'] = $year;
          $event['location'] = $location;          
          $event['name'] = $name;
          $event['id'] = $i->id;
          array_push($events,$event);
        }
       //     print_r($events);
     return view('events.events',compact('events'));
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

    public function showEvent($id){
        $data = Event::find($id);
        //print_r($data);
        $date = array();
        $d  = new \DateTime($data->start_date);
        $date['year'] = $d->format('Y');
        $date['day'] = $d->format('d');
        $date['hours'] = $d->format('H');
        $date['month'] = $d->format('m');
        $date['mins'] = $d->format('i');


       $event = array();
       $event['name'] = $data->event_name;
       $event['author'] = $data->publisher;
       $event['venue'] = $data->event_venue;
       $event['publisher'] = $data->publisher;
       $s = $data->created_at;
       $event['date_posted'] = $s->format('Y-m-d');

       $e= new \DateTime($data->end_date);
       $date['end_date'] = $e->format('Y-m-d');
       $date['start_date'] = $d->format('Y-m-d');
       $date['end_time'] = $e->format('H:i');
       $date['start_time'] = $d->format('H:i');



       return view("events.show",compact('date','event'));

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
