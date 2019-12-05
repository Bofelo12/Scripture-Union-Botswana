@extends('voyager::master')
@section('content')
<div class="container">
  <div class="">
          <h1 class="page-title">
<i class="voyager-news"></i>
Edit Event
</h1>
          <div id="voyager-notifications"></div>
          <div class="page-content edit-add container">
<div class="row">
  <div class="col-md-12">

      <div class="panel panel-bordered">
          <!-- form start -->
          <form method="post" action="{{action('EventController@update', $id)}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="PATCH" />            
   <div class="panel-body">
    <div class="form-group" >                          
        <label class="control-label" for="name">Title</label>
        <input  required  type="text" value="{{$event->event_name}}" class="form-control" name="title">
</div>

<div class="form-group">
        <label for="venue" class="control-label">Venue</label>
        <input type="text" class="form-control"  value="{{$event->event_venue}}" name="venue" required >
</div>

<div class="form-group">
        <div class="row">
               
               <div class="col-lg-6">
                      <label for="">Start Date</label>
                      <input  class="form-control" value="{{$event->start_date}}" name="startDate" id="event_start" type="text" >
    
           </div>
               
            <div class="col-lg-6">
                   <label for="">End Date</label>
                   <input  class="form-control" value="{{$event->end_date}}" name="endDate" id="event_end" type="text" >
 
        </div>
     </div>
</div> 

<div class="form-group">
        <button type="submit" class="btn btn-info col-lg-4">Save Changes</button>
  </div>  
           
   </div><!-- panel-body -->

              
          </form>

         

      </div>
  </div>
</div>
</div>

  </div>
</div>
</div>
</div>
@stop