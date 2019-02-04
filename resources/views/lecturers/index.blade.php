@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">{{strtoupper('List of Lecturer(s)')}}</div>

            <div class="panel-body">
                
                @if(count($lecturers) > 0)
                <table class="table table-stripped">
                    <tr>
                        <th>#</th>
                        <th>Surname</th>
                        <th>Full Names</th>
                        <th>Moble</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Physical Address</th>
                        <th>Actions / Options</th>
                        
                    </tr>
                    @foreach($lecturers as $index => $lecturer)
                
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$lecturer->last_name}}</td>
                            <td><a href="/lecturers/{{$lecturer->id}}">{{$lecturer->middle_name}} {{$lecturer->first_name}}</a></td>
                            <td>{{$lecturer->mobile}}</td>
                            <td>{{$lecturer->email}}</td>
                            <td>{{$lecturer->gender}}</td>
                            <td>{{$lecturer->physical_address}}</td>
                            
                            <td>
                                <a href="/lecturers/{{$lecturer->id}}/edit" class="btn btn-default">Edit </a>
                                {!!Form::open(['action' => ['LecturersController@destroy', $lecturer->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                
                                {!!Form::close()!!}
                            </td>
                        </tr>
                
                    @endforeach
                
                @else
                
                <p>No Lecturer(s) Yet!</p>
                @endif
                
            </div>
            
        </div>
        
    </div>
    
</div>
</div>

@endsection
                    
                                        