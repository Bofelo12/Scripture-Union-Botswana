@extends('layouts.app')

@section('content')
<h1>Host Event</h1>
<form method="POST" action="{{action('EventController@store')}}" enctype="multipart/form-data">
      <input type="hidden" name="_method" value="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Event Name:</label>
        <input type="text" class="form-control" name="event_name"required>
    </div>

    <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date">
        </div>
    
    <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" name="time">
    </div>

    <div class="form-group">
            <label for="venue">Event Venue:</label>
            <input type="text" class="form-control" name="venue" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection