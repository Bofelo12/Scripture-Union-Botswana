@extends('voyager::master')
@section('content')
<div class="container">
  <div class="">
          <h1 class="page-title">
<i class="voyager-news"></i>
Add Event
</h1>
          <div id="voyager-notifications"></div>
          <div class="page-content edit-add container">
<div class="row">
  <div class="col-md-12">

      <div class="panel panel-bordered">
          <!-- form start -->
          <form method="POST" action="{{action('EventController@store')}}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="POST">
              {{ csrf_field() }}             
   <div class="panel-body">
    <div class="form-group" >                          
        <label class="control-label" for="name">Title</label>
        <input  required  type="text" class="form-control" name="title">
</div>

<div class="form-group">
        <label for="venue" class="control-label">Venue</label>
        <input type="text" class="form-control" name="venue" required >
</div>

<div class="form-group">
        <div class="row">
               
               <div class="col-lg-6">
                      <label for="">Start Date</label>
                      <input  class="form-control" name="startDate" id="event_start" type="text" >
    
           </div>
               
            <div class="col-lg-6">
                   <label for="">End Date</label>
                   <input  class="form-control" name="endDate" id="event_end" type="text" >
 
        </div>
     </div>
</div> 

<div class="form-group">
        <button type="submit" class="btn btn-info col-lg-4">Save Event</button>
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