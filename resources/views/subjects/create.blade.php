@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{strtoupper('Add Subject')}}</div>

            <div class="panel-body">
                {!!Form::open(['action' => 'SubjectsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

                    <div class ="form-group">
                        {{Form::label('name', 'Subject Name')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => " Principle for Agriculture"])}}
                    </div>

                    <div class ="form-group">
                        {{Form::label('code', 'Subject Code')}}
                        {{Form::text('code', '', ['class' => 'form-control', 'placeholder' => "AE01"])}}
                    </div>

                    <div class ="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => "Enter Description Text Here"])}}
                    </div>

                    <div class ="form-group">
                        {{Form::label('passing_mark', 'Passing Mark')}}
                        {{Form::text('passing_mark', '', ['class' => 'form-control', 'placeholder' => "50"])}}
                    </div>

                    <div class ="form-group">
                        {{Form::label('exam_mark', 'Exam Mark')}}
                        {{Form::text('exam_mark', '', ['class' => 'form-control', 'placeholder' => "40"])}}
                    </div>

                    <div class ="form-group">
                        {{Form::label('test_mark', 'Test Mark')}}
                        {{Form::text('test_mark', '', ['class' => 'form-control', 'placeholder' => "60"])}}
                    </div>
                    
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    
                {!!Form::close()!!}
                
            </div>
            
        </div>
        
    </div>
    
</div>
</div>

@endsection
                    
                                        