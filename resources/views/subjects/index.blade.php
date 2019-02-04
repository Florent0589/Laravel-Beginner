@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">List of Subject(s)</div>

            <div class="panel-body">
                
                @if(count($subjects) > 0)
                <table class="table table-stripped">
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Subject / Module</th>
                        <th>Grade / Class</th>
                        <th>Tutor / Lecturer</th>
                        <th>Passing Mark</th>
                        <th>Actions / Options</th>
                        
                    </tr>
                    @foreach($subjects as $index => $subject)
                
                        <tr>
                            <td>{{$index + 1}}</td>
                            
                            <td>{{$subject->code}}</td>
                            <td><a href="/subjects/{{$subject->id}}">{{$subject->name}}</a></td>
                            <td>{{$subject->grade_id}}</td>
                            <td>{{$subject->lecturer_id}}</td>
                            <td>{{$subject->passing_mark}}</td>
                            
                            <td>
                                <a href="/subjects/{{$subject->id}}/edit" class="btn btn-default">Edit </a>
                                {!!Form::open(['action' => ['SubjectsController@destroy', $subject->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

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
                    
                                        