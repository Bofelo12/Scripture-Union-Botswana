@extends('layouts.app')

@section('content')
<h1>Member uploading files</h1>
<form method="POST" action="{{action('VideoController@store')}}" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name of Event:</label>
        <input type="text" class="form-control" name="name">
    </div>
 
    @if ($errors->has('video'))
        <div class="alert alert-danger" role="alert">
           {{ $errors->first('video') }}
        </div>
    @endif
    
    <div class="form-group">
        <label for="video">Video:</label>
        <input type="file" class="form-control" name="video" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="p-2" style="width: 80%;">
    <div class="card-columns">
    @foreach($videos as $video)
        <div class="card" style="width: 20rem;">
            <video width="320" height="240" controls>
                <source src="{{ asset($video->getUrlPath()) }}" type="video/mp4">
              Your browser does not support the video tag.
             </video>
        </div>
    @endforeach
    </div>
</div>
@endsection