@extends('layouts.app')


@section('content')
<h1 class="text-center">{{$post->title}}<h1>
       <h3 class="text-center"> &nbsp;{{$post->meta_description}}</h3>
       <h6>by {{$user->getUser($post->author_id)}}</h6>   
       <h4>{{$post->created_at->format('jS M. Y')}}<h4>
       <p><img src="{{imageUrl($post->image)}}" alt="Blog pic"></p>

<div class="container">
    <div class="row">
        <div class="">
            {!! $post->body !!}

        
    </div>
</div>
</div>


    
@endsection