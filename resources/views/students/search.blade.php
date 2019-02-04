@extends('layouts.app')

@section('content')
    <h3>Advance Search</h3>
    {!!Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

        <div class ="form-group">
            {{Form::label('first_name', 'First Name')}}
            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => "Joseph"])}}
        </div>

        <div class ="form-group">
            {{Form::label('last_name', 'Last Name')}}
            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => "Ambrose"])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        
    {!!Form::close()!!}
@endsection