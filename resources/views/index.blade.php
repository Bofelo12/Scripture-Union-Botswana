@extends('layouts.app')

@section('content')
<h1>Member uploading files</h1>
<form method="POST" action="{{action('PhotoController@store')}}" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    @if ($errors->has('photo.0'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('photo.0') }}
                        </div>
     @endif
    <!--if ($errors->has('photo'))
        <div class="alert alert-danger" role="alert">
            { $errors->first('photo') }
        </div>
    endif-->
    <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" name="photo[]" required>
    </div>

    @if ($errors->has('photo.1'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('photo.1') }}
        </div>
        @endif
    <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" name="photo[]">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="p-2" style="width: 80%;">
    <div class="card-columns">
    @foreach($photos as $photo)
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset($photo->getUrlPath()) }}" alt="Card image cap">
        </div>
    @endforeach
    </div>
</div>
@endsection