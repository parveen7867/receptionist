
@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add student</h1>
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
              <form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
    <div class="mb-3 w-50">
        <label for="name">Name </label>
        <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Enter Name ">
        @if($errors->has('name'))
            <p style="color:red;">{{ $errors->first('name') }}</p>
        @endif
    </div>
                 
                 
                  <div class="mb-3 w-50">
                    <label for="name"> EmailAddress </label>
                    <input type="email" class="form-control" value="{{old('email')}}" name="email" id="EmailAddress" placeholder="Enter EmailAddress">
                    @if($errors->has('email'))
      
                    <p style="color:red;">{{$errors->first('email')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                    <label for="">Password</label>
                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="Password" placeholder="Enter Password">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('password'))
                    {{$errors->first('password')}}
                  @endif
                  </div>
                 
                  <div class="mb-3 w-50">
                    <label for="name"> Address </label>
                    <input type="address" class="form-control" value="{{old('address')}}" name="address" id="address" placeholder="Enter Address">
                    @if($errors->has('address'))
      
                    <p style="color:red;">{{$errors->first('address')}}</p>
                    @endif
                  </div>
               
                  <button type="reset">reset</button>
                  <button type="submit">submit</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection