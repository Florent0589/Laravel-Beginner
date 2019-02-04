@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">{{strtoupper('List of Grade(s)')}}</div>

            <div class="panel-body">
                
                @if(count($grades) > 0)
                <table class="table table-stripped">
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Tutor / Lecturer</th>
                        <th>Created Date</th>
                        <th>Actions / Options</th>
                        
                    </tr>
                    @foreach($grades as $index => $grade)
                
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$grade->code}}</td>
                            <td><a href="/grades/{{$grade->id}}">{{$grade->name}}</a></td>
                            <td>{{$grade->description}}</td>
                            <td>{{$grade->lecturer_id}}</td>
                            <td>{{$grade->created_at}}</td>
                            
                            <td>
                                <a href="/grades/{{$grade->id}}/edit" class="btn btn-default">Edit </a>
                                {!!Form::open(['action' => ['GradesController@destroy', $grade->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

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
                    
                                        