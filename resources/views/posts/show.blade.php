@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-default">Go Back </a>
    <h1>{{$post->title}}</h1>
    <img style="width:240px; height:160px;" src="/storage/post-images/{{$post->post_image}}">
    <small>Posted on {{$post->created_at}} Posted by {{$post->user->name}}</small>
    <div>
        {!!$post->body!!}
    </div>

    @if(!Auth::guest())  

        @if(Auth::user()->id == $post->user_id)

            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit </a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                
            {!!Form::close()!!}
            
        @endif

    @endif

@endsection