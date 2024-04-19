



@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Schedule</h1>
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
              <!-- /.card-header -->
              <!-- form start -->
                  <form action="{{route('store.schedule')}}" method="post">
              @csrf
                
                  <div class="form-group">
                  <div class="mb-3  w-50">
                    <label for="name">Day </label>
                    <input type="Day" class="form-control" value="{{old('Day')}}" name="Day" id="Day" placeholder="Enter Day">
                    @if($errors->has('Day'))
                    <p style="color:red;">{{$errors->first('Day')}}</p>
                    @endif
                  </div>
                  <!--  -->
                  <div class="mb-3  w-50">
                  <label for="StartTime">Start Time</label>
                 <input type="time" class="form-control" name="StartTime" id="StartTime" placeholder="Enter Start Time">
                    @if($errors->has('StartTime'))
                    <p style="color:red;">{{$errors->first('StartTime')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50">
                  <label for="name">End Time </label>
                    <input type="time" class="form-control" value="{{old('EndTime')}}" name="EndTime" id="End_Time" placeholder="Enter Last Name">
                    @if($errors->has('EndTime'))
                    <p style="color:red;">{{$errors->first('EndTime')}}</p>
                    @endif
                  </div>
                  <div class="mb-3  w-50"> 
                  <label for="name">PerPatientTime </label>
                    <input type="Time" class="form-control" value="{{old('PerPatientTime')}}" name="PerPatientTime" id="PerPatientTime" placeholder="Enter PerPatientTime">
                    @if($errors->has('PerPatientTime'))
                    <p style="color:red;">{{$errors->first('PerPatientTime')}}</p>
                    @endif
                  </div>
                
                  <div class="mb-3  w-50">
                    <label for="name"> SerialVisibility </label>
                    <input type="Serial_Visibility" class="form-control" value="{{old('SerialVisibility')}}" name="SerialVisibility" id="Serial_Visibility" placeholder="Enter SerialVisibility">
                    @if($errors->has('SerialVisibility'))
      
                    <p style="color:red;">{{$errors->first('SerialVisibility')}}</p>
                    @endif
                  </div>
          
                <div class="w-50">
                <label for="Role">FirstName</label>
                 <select class="form-control" id="doctor" name="doctor">
                 <option>Select</option>
               @foreach($doctor as $doctor1)
                 <option value="{{$doctor1->id}}">{{$doctor1->FirstName}}</option>
               @endforeach
             </select>
                </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  <div class="w-50">
                <label for="Per_Patient_Time">Department</label>
                 <select class="form-control" id="doctor" name="doctor">
                 <option>Select</option>
               @foreach($doctor as $doctor1)
                 <option value="{{$doctor1->id}}">{{$doctor1->Department}}</option>
               @endforeach
             </select>
                </div>
                </div>
                  <div>  
                  <div class="mb-3  w-50">                 
                    <label for="radio"> Status </label></br>
                    <input type="radio"  value="Active" name="Status" id="Status" >Active
                    <input type="radio"  value="Inactive" name="Status" id="Status" >Inactive
                   
                    @if($errors->has('Status'))
                  <p style="color:red;">{{$errors->first('Status')}}</p>
      @endif
    </div>
                  <button type="reset">reset</button>
                  <button type="submit">submit</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection