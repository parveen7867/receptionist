@extends('.welcome')
@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Appointment</h1>
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
              <form  action="{{route('update.appointment')}}" method="post">
               @csrf
               <div class="card-body">
                        <div class="mb-3  w-50">  
                    <label for="">file</label>
                    <input type="file" name="file" value="{{$appointment->file}}" class="form-control" id="file" placeholder="Enter file">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('file'))
                    {{$errors->first('file')}}
                  @endif
                  <div class="mb-3  w-50">  
                    <label for="name">patientid</label>
                    <input type="text" name="patientid" value="{{$appointment->patientid}}" class="form-control" id="patientid" placeholder="Enter patientid">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 ">
                  @if($errors->has('patientid'))
                    {{$errors->first('patientid')}}
                  @endif
                     </div>
                     <div class="mb-3  w-50">  
                    <label for="name">DoctorName</label>
                    <input type="text" name="FirstName" value="{{$appointment->FirstName}}" class="form-control" id="doctorname" placeholder="Enter doctorName">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 ">
                  @if($errors->has('FirstName'))
                    {{$errors->first('FirstName')}}
                  @endif

                  <div class="mb-3  w-50">  
                    <label for="name">Department</label>
                    <input type="text" name="Department" value="{{$appointment->Department}}" class="form-control" id="Department" placeholder="Enter Department">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Department'))
                    {{$errors->first('Department')}}
                  @endif
                  <div class="mb-3  w-50">  
                    <label for="name">appointmentdate</label>
                    <input type="text" name="appointmentdate" value="{{$appointment->appointmentdate}}" class="form-control" id="appointmentdate" placeholder="Enter appointmentdate">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('appointmentdate'))
                    {{$errors->first('appointmentdate')}}
                  @endif
                  <div class="mb-3  w-50">  
                    <label for="name">problem</label>
                    <input type="date" name="problem" value="{{$appointment->problem}}" class="form-control" id="problem" placeholder="Enter problem">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('problem'))
                    {{$errors->first('problem')}}
                  @endif
                  <div class="mb-3  w-50">  
                    <label for="name">Status</label>
                    <input type="radio" name="status"  value="{{$appointment->status}}"   id="Status" >Active
                    <input type="radio" name="status"  value="{{$appointment->status}}"  id="Status">Inactive
                 
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Status'))
                    {{$errors->first('Status')}}
                  @endif
                  

               <input type="hidden" value="{{$appointment->id}}" name="id"/>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary w-100">Update</button>
                </div>
            
            <!-- /.card -->

            </section>
   @endsection
