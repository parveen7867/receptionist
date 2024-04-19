
@extends('.welcome') 

@section('content')

 
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add prescription</h1>
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
              <div class="card-body">
              <form action="{{ route('store.prescription')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="mb-3  w-50">               
                    <label class="form-lable">Patient ID </label>
                    <input type="text" class="form-control" name="patientid" id="patientid" placeholder="Enter patientID">
                  
                    @if($errors->has('patientID'))
                    <p style="color:red;">{{$errors->first('patientID')}}</p>
                    @endif
                  </div>
                   <div class="mb-3  w-50">               
                    <label class="form-lable">Foodallergies </label>
                    <input type="text" class="form-control" name="foodallergies" id="foodallergies" placeholder="Enter foodallergies">
                  
                    @if($errors->has('foodallergies'))
                    <p style="color:red;">{{$errors->first('foodallergies')}}</p>
                    @endif
                  </div>
                  <!--  -->
                  
                  <div class="mb-3  w-50"  >
                    <label class="form-lable">Tendencybleed </label>
                    <input type="text" class="form-control" value="{{old('tendencybleed')}}" name="tendencybleed" id="tendencybleed" placeholder="Enter tendencybleed ">
                    @if($errors->has('tendencybleed'))
                    <p style="color:red;">{{$errors->first('tendencybleed')}}</p>
                    @endif
                  </div>
                  
                  <div class="mb-3 w-50">
                  <label class="form-lable">Heartdisease</label>
                    <input type="text" class="form-control" value="{{old('heartdisease')}}" name="heartdisease" id="heartdisease" placeholder="Enter Last Name">
                    @if($errors->has('heartdisease'))
                    <p style="color:red;">{{$errors->first('heartdisease')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">                 
                  <label class="form-lable">Highblood Pressure </label>
                    <input type="highbloodpressure" class="form-control" value="{{old('highbloodpressure')}}" name="highbloodpressure" id="highbloodpressure" placeholder="Enter highbloodpressure">
                    @if($errors->has('highbloodpressure'))
                    <p style="color:red;">{{$errors->first('highbloodpressure')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                    <label class="form-lable">Diabetic</label>
                    <input type="diabetic" class="form-control" value="{{old('diabetic')}}" name="diabetic" id="diabetic" placeholder="Enter diabetic">
                    @if($errors->has('diabetic'))
      
                    <p style="color:red;">{{$errors->first('diabetic')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                    <label class="form-lable">Surgery</label>
                    <input type="surgery" name="surgery" value="{{old('surgery')}}" class="form-control" id="surgery" placeholder="Enter surgery">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('surgery'))
                    {{$errors->first('surgery')}}
                  @endif
                  </div>
                  <div class="w-50">
                  <lable class="form-lable">Accident</label>
                    <input type="accident" name="accident" value="{{old('accident')}}" class="form-control" id="accident" placeholder="Enter accident">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('accident'))
                    {{$errors->first('accident')}}
                  @endif
                   
                    </div>   
                   
                   
</select>

<button type="reset">reset</button>
<button type="submit">submit</button>
</form>
                 <!-- /.card-body
 
               
        
             </section>
    @endsection
    
 
