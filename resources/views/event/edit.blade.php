@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('EventController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
        <input type="text" name="name" class="form-control" value="{{$event->event_name}}" placeholder="Enter name" />
       </div>
   <div class="form-group">
    <input type="date" name="date" class="form-control" value="{{$event->event_date}}" placeholder="Select date" />
   </div>
   <div class="form-group">
    <input type="time" name="time" class="form-control" value="{{$event->event_time}}" placeholder="Select time" />
   </div>
   <div class="form-group">
    <input type="text" name="venue" class="form-control" value="{{$event->event_venue}}" placeholder="Enter venue"/>
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
