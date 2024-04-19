@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Appointment</h1>
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
                  <form action="{{route('store.appointment')}}" method="post">
              @csrf
              <div class="mb-3  w-50"> 
                <label for="Role">First Name</label>
                 <select class="form-control" id="patinet" name="FirstName">
                 <option>Select</option>
               @foreach($Patient as $patinet1)
                 <option value="{{$patinet1->id}}">{{$patinet1->FirstName}}</option>
               @endforeach
             </select>
                </div>
                  <div class="mb-3  w-50">   
                <label for="Role">Department Name</label>
                 <select class="form-control" id="doctor" name="Department">
                 <option>Select</option>
               @foreach($doctor as $doctor1)
                 <option value="{{$doctor1->id}}">{{$doctor1->Department}}</option>
               @endforeach
             </select>
                </div>

                <div class="mb-3  w-50"> 
                <label for="Role">Doctor Name</label>
                 <select class="form-control" id="doctor" name="FirstName">
                 <option>Select</option>
               @foreach($doctor as $doctor1)
                 <option value="{{$doctor1->id}}">{{$doctor1->FirstName}}</option>
               @endforeach
             </select>
                </div>

                <div class="mb-3  w-50">    
             <label for="name">Appointment Date</label>
             <input type="date" class="form-control" value="{{old('appointmentdate')}}" name="appointmentdate" id="appointmentname" placeholder="Enter appointmentname ">
             @if($errors->has('appointmentdate'))
             <p style="color:red;">{{$errors->first('appointmentdate')}}</p>
             @endif
              </div>
              <div class="mb-3  w-50">    
            <label for="name">Problem </label>
            <input type="data" class="form-control" value="{{old('problem')}}" name="problem" id="problem" placeholder="Enterptoblem">
             @if($errors->has('problem'))
      
             <p style="color:red;">{{$errors->first('problem')}}</p>
             @endif
            </div>
            <div>   
            <div class="mb-3  w-50">                    
             <label for="radio"> Status </label></br>
            <input type="radio"  value="Active" name="status" id="Status" >Active
            <input type="radio"  value="Inactive" name="status" id="Status" >Inactive    
             @if($errors->has('Status'))
             <p style="color:red;">{{$errors->first('Status')}}</p>
      @endif
    </div>
                  <button type="reset">reset</button>
                  <button type="submit">send</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection
