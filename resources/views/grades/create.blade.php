@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <br>
        <div class="col-md-10 col-md-offset-1 panel panel-default">
            <div class="panel-heading">Add Grade</div>
          <br>      

        {!!Form::open(['action' => 'GradesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Grade</div>

                <div class="panel-body">
                        <div class ="form-group {{ $errors->has('parent_id') ? ' has-error' : '' }}">

                            <div class="col-md-4">
                                {{Form::label('parent_id', 'Main Class')}}
                            </div>
                            <div class="col-md-8">
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="">--- Select Main Route ---</option>
                                    @foreach($grades as $index => $trip)
                                        <option value="{{$index}}">{{$trip}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('parent_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class ="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-4">
                                {{Form::label('name', 'Name')}}
                            </div>
                            <div class="col-md-8">
                                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => "Form I"])}}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class ="form-group {{ $errors->has('description') ? ' has-error' : '' }}">

                            <div class="col-md-4">
                                {{Form::label('description', 'Description')}}
                            </div>
                            <div class="col-md-8">
                                {{Form::textarea('description', '', ['rows' => '3', 'id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => "Enter description Text Here"])}}

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class ="form-group">

                            <div class="col-md-4">
                                {{Form::label('passing_mark', 'Passing Mark')}}
                            </div>
                            <div class="col-md-8">
                                {{Form::text('passing_mark', '', ['class' => 'form-control', 'placeholder' => "10"])}}
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class ="form-group {{ $errors->has('fee') ? ' has-error' : '' }}">

                            <div class="col-md-4">
                                {{Form::label('fee', 'Fee (SZL)')}}
                            </div>
                            <div class="col-md-8">
                                {{Form::text('fee', '', ['class' => 'form-control', 'placeholder' => "786.00"])}}

                                @if ($errors->has('fee'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fee') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class ="form-group">
                             {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        </div>
                            
                    </div>
                </div>
            </div>
            
        {!!Form::close()!!}
        </div>
    </div>
</div>

@endsection
