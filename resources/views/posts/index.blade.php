@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) > 0)

            @foreach($posts as $post)

                <div class="well">

                    <div class="row">

                        <div class="col-md-4 col-sm-4">
                            
                            <img style="width:240px; height:160px;" src="/storage/post-images/{{$post->post_image}}">
                        </div>

                        <div class="col-md-8 col-sm-8">
                            
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Posted on {{$post->created_at}} Posted by {{$post->user->name}}</small>

                        </div>

                    </div>
                    
                </div>

            @endforeach
             {{$posts->links()}}
    @else

        <p> No post avaliable yet.</p>

    @endif
@endsection