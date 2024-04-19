
@extends('.welcome') 

@section('content')

 
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Doctor</h1>
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
              <form action="{{ route('store.doctor')}}" method="post" enctype="multipart/form-data">
              @csrf
                   <div class="mb-3  w-50">               
                    <label class="form-lable">Picture </label>
                    <input type="file" class="form-control" name="Picture" id="Picture" placeholder="Upload Picture">
                    @if($errors->has('Picture'))
                    <p style="color:red;">{{$errors->first('Picture')}}</p>
                    @endif
                  </div>
                  <!--  -->
                  
                  <div class="mb-3  w-50"  >
                    <label class="form-lable">FirstName </label>
                    <input type="text" class="form-control" value="{{old('FirstName')}}" name="FirstName" id="FirstName" placeholder="Enter FirstName ">
                    @if($errors->has('FirstName'))
                    <p style="color:red;">{{$errors->first('FirstName')}}</p>
                    @endif
                  </div>
                  
                  <div class="mb-3 w-50">
                  <label class="form-lable">Last Name </label>
                    <input type="text" class="form-control" value="{{old('LastName')}}" name="LastName" id="LastName" placeholder="Enter Last Name">
                    @if($errors->has('LastName'))
                    <p style="color:red;">{{$errors->first('LastName')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">                 
                  <label class="form-lable">Department </label>
                    <input type="Department" class="form-control" value="{{old('Department')}}" name="Department" id="Department" placeholder="Enter Department">
                    @if($errors->has('Department'))
                    <p style="color:red;">{{$errors->first('Department')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                    <label class="form-lable"> Email Address </label>
                    <input type="Email" class="form-control" value="{{old('EmailAddress')}}" name="EmailAddress" id="EmailAddress" placeholder="Enter EmailAddress">
                    @if($errors->has('EmailAddress'))
      
                    <p style="color:red;">{{$errors->first('EmailAddress')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                    <label class="form-lable">Password</label>
                    <input type="password" name="Password" value="{{old('Password')}}" class="form-control" id="Password" placeholder="Enter Password">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('Password'))
                    {{$errors->first('Password')}}
                  @endif
                  </div>
                  <div class="mb-3 w-50">                 
                  <label class="form-lable">Contact Number </label>
                    <input type="number" class="form-control" value="{{old('Contactnumber')}}" name="Contactnumber" id="Contactnumber" placeholder="Enter Contactnumber">
                    @if($errors->has('Contactnumber'))
                    <p style="color:red;">{{$errors->first('Contactnumber')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">                 
                  <label class="form-lable">Date of Birth</label>
                    <input type="date" class="form-control" value="{{old('DateofBirth')}}" name="DateofBirth" id="DateofBirth" placeholder="Enter DateofBirth">
                    @if($errors->has('DateofBirth'))
                    <p style="color:red;">{{$errors->first('DateofBirth')}}</p>
                    @endif
                  </div>
                    <div>   
                    <div class="mb-3 w-50">                
                    <label class="form-lable"> Sex </label></br>
                    <input type="radio"  value="male" name="Sex" id="Sex" >male
                    <input type="radio"  value="female" name="Sex" id="Sex" >female
                    <input type="radio"  value="Other" name="Sex" id="Sex" >Other
                    @if($errors->has('Sex'))
      
                    <p style="color:red;">{{$errors->first('Sex')}}</p>
                    @endif
             
                    </div>   
                   
                 
                  <button type="reset">reset</button>
                  <button type="submit">submit</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection
