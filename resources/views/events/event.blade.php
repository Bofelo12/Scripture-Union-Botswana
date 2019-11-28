@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br>
  <h3 align="center">Event</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <form method="post" action="{{action('EventController@create')}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="POST" />
    <div class="form-group">
     <input type="submit" class="btn btn-primary" value="Event" />
    </div>
    </form>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>

    <th>Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Venue</th>
  
   </tr>
   @foreach($event as $row)
   <tr>
    <td>{{$row['event_name']}}</td>
    <td>{{$row['event_date']}}</td>
    <td>{{$row['event_time']}}</td>
    <td>{{$row['event_venue']}}</td>
    <td><a href="{{action('EventController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('EventController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
 
   @endforeach
  </table>
 </div>
</div>

@endsection
