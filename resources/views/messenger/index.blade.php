@extends('voyager::master')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <a href="#" data-toggle="modal" data-target="#createThread" class="btn btn-flat btn-primary ">Create Thread</a>
        </div>
        <div class="col-lg-9">
        </div>
</div>
    @if (Session::has('error_message'))
        <div class="alert alert-danger" role="alert">
            {!! Session::get('error_message') !!}
        </div>
    @endif
    @if($threads->count() > 0)
        @foreach($threads as $thread)
        <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
       
        <div class="container">
        <div class="row">
        <div class="col-lg-1"></div>
            <div class="col-lg-10">
            <div class="media alert {!!$class!!}" style="background:none;border:#dddddd solid thin;color:black">
            <h4 class="media-heading" style="text-decoration:underline">{!! link_to('messages/' . $thread->id, $thread->subject) !!}</h4>
            <p>{!! $thread->latestMessage->body !!}</p>
            <p><small><strong>Creator:</strong> {!! $thread->creator()->name !!}</small></p>
            <p><small><strong>Participants:</strong> {!! $thread->participantsString(Auth::id()) !!}</small></p>
        </div>
            </div>   
            <div class="col-lg-1"></div>    
        </div>
        </div>       
       
        @endforeach
    @else
        <p>Sorry, no threads.</p>
    @endif
<div class="modal fade" tabindex="-1" id="createThread" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create a new Thread</h4>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{action('MessagesController@store')}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="POST">
    {{ csrf_field() }}
<div class="col-md-12">
    <!-- Subject Form Input -->
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject">
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" class="form-control"></textarea>
    </div>

    <!-- Message file -->
    <div class="form-group">
        <label for="message_file">File</label>
        <input type="file" class="form-control" name="message_file">
    </div>

   <div class="form-group">
<label for="">Receipients</label> 
@if($users->count() > 0)
    <div class="checkbox">    
        @foreach($users as $user)
            <label title="{!!$user->name!!}"><input type="checkbox"  name="recipients[]" value="{!!$user->id!!}">{!!$user->name!!}</label>
        @endforeach
    </div>
    @endif
</div>
    
 
</div>
       
      </div>
      <div class="modal-footer">
      <div class="">
      <input type="submit" class="btn btn-primary col-lg-4" value="Send">
      </div>
      </div>
      </form> 
      
    </div><!-- /.modal-content -->
    
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop