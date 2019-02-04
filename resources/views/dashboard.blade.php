@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>

                    @if(count($posts) > 0)
                        <table class="table table-stripped">
                            <tr>
                                <th>Title</th>
                                <th>Posted Date</th>
                                <th>Actions / Options</th>
                            </tr>
                            @foreach($posts as $post)

                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit </a>
                                    
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        
                                        {!!Form::close()!!}
                                    </td>
                                </tr>

                            @endforeach
                    @else

                     <p>You have no Post Yet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
