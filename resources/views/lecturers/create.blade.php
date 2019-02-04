@extends('layouts.app')

@section('content')
<section class="content">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Student Application
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Personal Information</div>
                                {!!Form::open(['action' => 'StudentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                                <div class="panel-body">
                            
                                    <div class ="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('first_name', 'First Name')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::text('first_name', '', ['class' => 'form-control ', 'placeholder' => "Florent"])}}
    
                                            @if ($errors->has('first_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('last_name', 'Last Name')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => "Shomora"])}}
    
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('date_of_birth', 'Date Of Birth')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
    
                                            @if ($errors->has('date_of_birth'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('gender', 'Gender')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::select('gender', ['Female' => 'Female', 'Male' => 'Male'], null, ['class' => 'form-control', 'placeholder' => 'Select  Gender...'])}}
    
                                            @if ($errors->has('gender'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('any_disability') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('any_disability', 'Any Disability')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::radio('disabled', 0, true)}}Not Disabled
                                            {{Form::radio('disabled', 1, true)}}Disabled
    
                                            @if ($errors->has('any_disability'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('any_disability') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('mobile', 'Mobile Number')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => "79000000"])}}
    
                                            @if ($errors->has('gender'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('email', 'E-mail Address')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => "someone@example.com"])}}
    
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('alternative_person') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('alternative_person', 'Alternative Person')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::text('alternative_person', '', ['class' => 'form-control', 'placeholder' => "Ezron Moleki"])}}
    
                                            @if ($errors->has('alternative_person'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('alternative_person') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('alternative_contact') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('alternative_contact', 'Alternative Contact')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::text('alternative_contact', '', ['class' => 'form-control', 'placeholder' => "7600000"])}}
    
                                            @if ($errors->has('alternative_contact'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('alternative_contact') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
    
                                    <div class ="form-group {{ $errors->has('relationship_id') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('relationship_id', 'Relationship')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::select('relationship_id', $relationships, null, ['class' => 'form-control', 'placeholder' => 'Select  Relationship...'])}}
    
                                            @if ($errors->has('relationship_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('relationship_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class ="form-group {{ $errors->has('avatar') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('avatar', 'Profile Picture')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::file('avatar')}}
        
                                            @if ($errors->has('avatar'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('avatar') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                                <div class="panel panel-default">
                            <div class="panel-heading">Residential Address</div>
            
                            <div class="panel-body">
            
                                    
                                    <div class ="form-group {{ $errors->has('region_id') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('region_id', 'Region')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::select('region_id', $regions, null, ['class' => 'form-control', 'placeholder' => 'Select  Region...', 'onchange' => 'JavaManager.drillDown(this.value)'])}}
    
                                        @if ($errors->has('region_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('region_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
            
                                
                                <div class ="form-group {{ $errors->has('sub_region_id') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('sub_region_id', 'Sub Region')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::select('sub_region_id', $subregions, null, ['class' => 'form-control', 'placeholder' => 'Select  Sub Region...'])}}
    
                                        @if ($errors->has('sub_region_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sub_region_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
    
                                <div class ="form-group {{ $errors->has('city_id') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('city_id', 'City')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::select('city_id', $towns, null, ['class' => 'form-control', 'placeholder' => 'Select  City...'])}}
    
                                        @if ($errors->has('relationship_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('city_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
            
                                    
                                <div class ="form-group {{ $errors->has('physical_address') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('physical_address', 'Physical Address')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::text('physical_address', '', ['class' => 'form-control', 'placeholder' => "Sidvwashini"])}}
    
                                        @if ($errors->has('physical_address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('physical_address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">Permanent Address</div>
                
                                <div class="panel-body">
                
                                    <div class ="form-group {{ $errors->has('same_as_above') ? ' has-error' : '' }}">

                                            <div class="col-md-4">
                                                {{Form::label('same_as_above', 'Use Same Address')}}
                                            </div>
                                            <div class="col-md-8">
                                                <input  name="same_as_above" type="radio" onclick = 'JavaManager.sameAddress();' value="1"> Yes
                                                <input name="same_as_above" type="radio" value="0"> No
                                                @if ($errors->has('same_as_above'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('same_as_above') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <br>
                                        <br>   
                                    <div class ="form-group {{ $errors->has('permanent_region_id') ? ' has-error' : '' }}">
    
                                        <div class="col-md-4">
                                            {{Form::label('permanent_region_id', 'Region')}}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::select('permanent_region_id', $regions, null, ['class' => 'form-control', 'placeholder' => 'Select  Region...', 'onchange' => 'JavaManager.drillDownPermanent(this.value)'])}}
        
                                            @if ($errors->has('permanent_region_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('permanent_region_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <br>
            
                                
                                <div class ="form-group {{ $errors->has('permanent_sub_region_id') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('permanent_sub_region_id', 'Sub Region')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::select('permanent_sub_region_id', $subregions, null, ['class' => 'form-control', 'placeholder' => 'Select  Sub Region...'])}}
    
                                        @if ($errors->has('permanent_sub_region_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('permanent_sub_region_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
    
                                <div class ="form-group {{ $errors->has('permanent_city_id') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('permanent_city_id', 'City')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::select('permanent_city_id', $towns, null, ['class' => 'form-control', 'placeholder' => 'Select  City...'])}}
    
                                        @if ($errors->has('permanent_city_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('permanent_city_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
            
                                    
                                <div class ="form-group {{ $errors->has('permanent_physical_address') ? ' has-error' : '' }}">
    
                                    <div class="col-md-4">
                                        {{Form::label('permanent_physical_address', 'Physical Address')}}
                                    </div>
                                    <div class="col-md-8">
                                        {{Form::text('permanent_physical_address', '', ['class' => 'form-control', 'placeholder' => "Sidvwashini"])}}
    
                                        @if ($errors->has('permanent_physical_address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('permanent_physical_address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <br>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                    <div class="col-lg-14">
                        <div class="panel panel-default">
                            <div class="panel-heading">Grade & Subjects</div>
            
                            <div class="panel-body">
                                    
                            </div>
                        </div>
                    </div>

                    <!-- /.row (nested) -->
                    <div class="col-lg-14">
                        <div class="panel panel-default">
                            <div class="panel-heading">Application Action</div>
            
                            <div class="panel-body">
                                    <button type="submit" class="btn btn-primary">Submit Button</button>
                                    <button type="reset" class="btn btn-danger">Reset Button</button>
                            </div>
                        </div>
                    </div>
                    
                {!!Form::close()!!}
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</section>
@endsection
