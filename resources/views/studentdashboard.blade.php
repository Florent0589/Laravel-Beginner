@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)

        <ul class="list-group">
            @foreach($services as $index => $service)

                <li class="list-group-item"><a href="/students/{{$index}}">{{$service}}</a></li>
            @endforeach
        </ul>

    @endif
@endsection