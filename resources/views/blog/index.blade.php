@extends('layouts.app')

@section('content')
<div class="container">
   
            @empty($posts)
                <p>There are currently no posts.</p>
            @else
            <div class="row">
                   
                @foreach($posts as $post)
                          
                    <div class="col">
                        <div class="card">
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                                <img src="{{imageUrl($post->image, 260, 175) }}" style="width: 100%">
                            </a>
                            <div class="card-section">
                                <span class="label secondary">
                                    {{ $post->created_at->format('d/m/Y')}}
                                </span>
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                                    <h4>{{ $post->title  }}</h4>
                                        <h6>by {{$user->getUser($post->author_id)}}</h6>   
                                </a>
                                @if ($post->excerpt)
                                    <p>{{ Illuminate\Support\Str::limit($post->excerpt, 50, '&hellip;') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                        
                @endforeach
            </div>
            @endempty
        </div>

@endsection