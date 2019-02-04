@extends('layouts.app')

@section('content')

    <a href="/subjects" class="btn btn-default">Go Back </a>
    <h1>{{$subject->title}}</h1>
    <img style="width:240px; height:160px;" src="/storage/subject-images/{{$subject->subject_image}}">
    <small>subjected on {{$subject->created_at}} </small>
    <div>
        {!!$subject->body!!}
    </div>

    @if(!Auth::guest())  

        @if(Auth::user()->id == $subject->user_id)

            <a href="/subjects/{{$subject->id}}/edit" class="btn btn-default">Edit </a>

            {!!Form::open(['action' => ['subjectsController@destroy', $subject->id], 'method' => 'subject', 'class' => 'pull-right'])!!}

                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                
            {!!Form::close()!!}
            
        @endif

    @endif

@endsection