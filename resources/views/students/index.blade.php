@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List of student(s)</h3>

            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <div class="btn-group">
                <button class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                  <i class="fa fa-wrench"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <button class="btn btn-box-tool" type="button" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                    <form role="form" method="POST">
                        <div class="form-group input-group">
                            {{Form::text('barcode', '', ['class' => 'form-control', 'placeholder' => "student No.", 'onchange' => 'JavaManager.searchstudent(this.value)'])}}

                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </p>

                @if(count($students) > 0)
                <table id='students' class="table table-stripped" style="font-size:13px;">
                    <tr>
                        <th>#</th>
                        <th>Cusomter No.</th>
                        <th>Surname</th>
                        <th>Full Names</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Physical Address</th>
                        <th>Balance (SZL)</th>
                        <th>Status</th>
                        <th>Actions / Options</th>
                        
                    </tr>
                    @foreach($students as $index => $student)
                
                        <tr id=student-data>
                            <td>{{$index + 1}}</td>
                            <td>{{$student->barcode}}</td>
                            <td>{{$student->last_name}}</td>
                            <td><a href="/students/{{$student->id}}">{{$student->middle_name}} {{$student->first_name}}</a></td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->physical_address}}</td>

                            @if($student->balance > 50)
                                <td style="font-weight: bold;color:green;">E {{$student->balance}}</td>
                            @else
                                <td style="font-weight: bold;color:red;">E {{$student->balance}}</td>
                            @endif

                            <td>
                                <p role="button"  class="btn btn-sm {{\App\Models\Status::translateStatus($student->status_id)[2]}} active" >
                                    {{\App\Models\Status::translateStatus($student->status_id)[1]}}
                                </p>
                            </td>
                            <td>
                                <a href="/students/{{$student->id}}"><img src="/storage/actions/settings.png" height="20" width="20"></a>
                                Account Settings
                            </td>
                        </tr>
                
                    @endforeach
                </table>
                {{$students->links()}}
                @else
                
                <p>No student(s) Yet!</p>
                @endif
              </div>
             
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">{{$pending}}</h5>
                  <span class="description-text">TOTAL PENDING</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">{{$deleted}}</h5>
                  <span class="description-text">TOTAL DELETED</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">{{$active}}</h5>
                  <span class="description-text">TOTAL ACTIVE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-xs-6">
                <div class="description-block">
                  <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">{{$not_verified}}</h5>
                  <span class="description-text">NOT VERIFIED</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
@endsection
                    
                                        