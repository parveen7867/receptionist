



@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Schedule</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session('success'))
   <div class="alert mx-auto alert-success ">
     <strong>Success!</strong> {{session('success')}}
   </div>
@endif
@if(session('error'))
   <div class="alert alert-danger ">
  <strong>Error!</strong> {{session('error')}}
   </div>
@endif
    <section class="content">
      
            <!-- general form elements -->
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('update.schedule') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $schedule->id }}">
    
   
        <div class="form-group">
        <div class="mb-3  w-50">
            <label for="Day">Day</label>
            <input type="Day" class="form-control" value="{{ $schedule->Day}}" name="Day" id="Day" placeholder="Enter Day">
            @if($errors->has('Day'))
                <p style="color: red;">{{ $errors->first('Day')}}</p>
            @endif
        </div>
                  <div class="mb-3  w-50">
                    <label for="name">StartTime </label>
                    <input type="time" class="form-control" value="{{$schedule->StartTime}}" name="StartTime" id="StartTime" placeholder="Enter StartTime ">
                    @if($errors->has('StartTime'))
                    <p style="color:red;">{{$errors->first('StartTime')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50">
                  <label for="name">End Time </label>
                    <input type="time" class="form-control" value="{{$schedule->EndTime}}" name="EndTime" id="EndTime" placeholder="Enter Last Name">
                    @if($errors->has('EndTime'))
                    <p style="color:red;">{{$errors->first('EndTime')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50">
                  <label for="name">PerPatientsTime </label>
                    <input type="time"  class="form-control" value="{{$schedule->PerPatientTime}}" name="PerPatientTime" id="PerPatientTime" placeholder="Enter Per_Patient_Time">
                    @if($errors->has('PerPatientTime'))
                    <p style="color:red;">{{$errors->first('PerPatientTime')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50">
                  <label for="name">DoctorName </label>
                    <input type="Department"  class="form-control" value="{{$schedule->FirstName}}" name="FirstName" id="FirstName" placeholder="FirstName">
                    @if($errors->has('FirstName'))
                    <p style="color:red;">{{$errors->first('FirstName')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50">
                  <label for="name">Department </label>
                    <input type="Department"  class="form-control" value="{{$schedule->Department}}" name="Department" id="Department" placeholder="Department">
                    @if($errors->has('Department'))
                    <p style="color:red;">{{$errors->first('Department')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50"> 
                  <label for="name">SerialVisibility </label>
                    <input type="SerialVisibility"   class="form-control" value="{{$schedule->SerialVisibility}}" name="SerialVisibility" id="SerialVisibility" placeholder="SerialVisibility ">
                    @if($errors->has('SerialVisibility'))
                    <p style="color:red;">{{$errors->first('SerialVisibility')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50">
                    <label for="name">Status</label>
                    <input type="radio" name="Status"  value="{{$schedule->Status}}"   id="Status" >Active
                    <input type="radio" name="Status"  value="{{$schedule->Status}}"  id="Status" >Inactive
                 
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('Status'))
                    {{$errors->first('Status')}}
                  @endif
                  </div>
                  <input type="hidden" value="{{$schedule->id}}" name="id"/>
                <div class="card-footer ">
                <button type="submit" class="btn btn-primary w-100">Update Ticket</button>
                </div>
             
            <!-- /.card -->
       
            </section>
   @endsection