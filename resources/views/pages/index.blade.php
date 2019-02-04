@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h3>{{$title}}</h3>
        <p>This is an application that manages transport collection</p>
        <p> 
                Looking to install this package in Lumen? First of all,
                 making this package compatible with Lumen will require some core changes to Lumen,
                  which we believe would dampen the effectiveness of having Lumen in the first place. 
                  Secondly, it is our belief that if you need this package in your application, 
                  then you should be using Laravel anyway.
        </P>
    </div>
@endsection
