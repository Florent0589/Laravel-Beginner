@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">List of Student(s)</div>

            <div class="panel-body">
                
                @if(count($students) > 0)
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
                    @foreach($students as $index => $student)
                
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$student->last_name}}</td>
                            <td><a href="/students/{{$student->id}}">{{$student->middle_name}} {{$student->first_name}}</a></td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->physical_address}}</td>
                            
                            <td>
                                <a href="/students/{{$student->id}}/edit" class="btn btn-default">Edit </a>
                                {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                
                                {!!Form::close()!!}
                            </td>
                        </tr>
                
                    @endforeach
                
                @else
                
                <p>No Student(s) Yet!</p>
                @endif
                
            </div>
            
        </div>
        
    </div>
    
</div>
</div>

@endsection
                    
                                        