@extends('layouts.master')

@section('content')
<h1>Create a new message</h1>
<form method="POST" action="{{action('MessagesController@store')}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="POST">
    {{ csrf_field() }}
<div class="col-md-6">
    <!-- Subject Form Input -->
    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject">
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
    </div>

    <!-- Message file -->
    <div class="form-group">
        <label for="message_file">File:</label>
        <input type="file" name="message_file">
    </div>

    @if($users->count() > 0)
    <div class="checkbox">
        @foreach($users as $user)
            <label title="{!!$user->name!!}"><input type="checkbox" name="recipients[]" value="{!!$user->id!!}">{!!$user->name!!}</label>
        @endforeach
    </div>
    @endif
    
    <!-- Submit Form Input -->
    <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</form>
@endsection