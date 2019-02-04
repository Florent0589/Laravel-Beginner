
{!!Form::open(['action' => 'StudentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

        <div class ="form-group">
            {{Form::label('first_name', 'First Name')}}
            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => "Enter First Name"])}}
        </div>

        <div class ="form-group">
            {{Form::label('first_name', 'First Name')}}
            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => "Enter First Name"])}}
        </div>

        <div class ="form-group">
            {{Form::label('gender', 'First Name')}}
            {{Form::radio('gender', 'Female', true)}} 
            {{Form::label('gender', 'Male')}}
            {{Form::radio('gender', 'Male', true)}} 
        </div>

        <div class ="form-group">
                {{Form::label('animal', 'Animal')}}
               {{ Form::select('animal',[
                    'Cats' => ['leopard' => 'Leopard'],
                    'Dogs' => ['spaniel' => 'Spaniel'],
                ])}}
                
        </div>

        <div class ="form-group">
                {{Form::label('date_of_birth', 'Date Of Birth')}}
                {{Form::date('date_of_birth', \Carbon\Carbon::now())}}
            </div>

        <div class ="form-group">
            {{Form::label('first_name', 'First Name')}}
            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => "Enter First Name"])}}
        </div>

        <div class ="form-group">
            {{Form::file('avatar')}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        
    {!!Form::close()!!}