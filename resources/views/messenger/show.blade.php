@extends('voyager::master')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
       
        <h1>{!! $thread->subject !!}</h1>

        @foreach($thread->messages as $message)
            <div class="media">
                
                <div class="media-body">
                <div class="row">
                   <div class="text-muted text-center"><small><?php print(strtoupper($message->created_at->diffForHumans())) ?></small></div>
                   </div>
                    <?php
                    if(Auth()->user()->email == $message->user->email){                    
                    ?>                    
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="pull-left" style="background:#f1f0f0;border-radius:10px;padding:0.8%;color:black">
                    <h5 class="media-heading">{!! $message->user->name !!}</h5>
                    <p>{!! $message->body !!}</p>
                    </div>
                        </div>
                    </div>
                    <?php }else{?>
                       <div class="row">
                        <div class="col-lg-12">
                        <div class="pull-right" style="background:#22a7f0;border-radius:10px;padding:0.8%;color:white">
                    <h5 class="media-heading">{!! $message->user->name !!}</h5>
                    <p>{!! $message->body !!}</p>
                    </div>
                        </div> 
                       </div>
                    <?php }?>
                   
                   
                   </div>
            </div>
        @endforeach

        <p>Attachments:</p>

        @foreach($files as $file)
        <img src="{{asset(Storage::url($file->file_path))}}" alt="download attachment" width="250px">
       
        @endforeach



        <h2>Add a new message</h2>
        {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>


        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@stop