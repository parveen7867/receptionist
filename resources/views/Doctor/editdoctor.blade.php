@extends('.welcome')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Doctor</h1>
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
  <form  action="{{route('update.doctor')}}" method="post"  enctype="multipart/form-data">
  @csrf
  @method('POST')

  <div class="form-group">
  <div class="mb-3  w-50">
  <label class="form-lable">Picture</label>
  <input type="file" name="Picture" value="{{$doctor->Picture}}" class="form-control" id="Picture" placeholder="Enter Picture">
  <img src="{{ asset($doctor->Picture) }}" width="50px" height="50px" />
   <div class=" mt-n2 mb-3 fw-bold fs-6 text-blue">
   </div>
   @if($errors->has('Picture'))
   {{$errors->first('Picture')}}
   @endif
   </div>
   <div class="mb-3  w-50">
   <label class="form-lable">FirstName</label>
   <input type="text" name="FirstName" value="{{$doctor->FirstName}}" class="form-control" id="FirstNmae" placeholder="Enter FirstName">
   </div>
   <div class=" mt-n2 mb-3 fw-bold fs-6 text">
   @if($errors->has('FirstName'))
   {{$errors->first('FirstName')}}
   @endif
   <div class="mb-3  w-50">
   <label class="form-lable">LastName</label>
   <input type="text" name="LastName" value="{{$doctor->LastName}}" class="form-control" id="LastName" placeholder="Enter LastName">
   </div>
   <div class=" mt-n2 mb-3 fw-bold fs-6 text">
  @if($errors->has('LastName'))
   {{$errors->first('LastName')}}
    @endif
    <div class="mb-3  w-50">
    <label class="form-lable">Department</label>
   <input type="text" name="Department" value="{{$doctor->Department}}" class="form-control" id="Department" placeholder="Enter Department">
   </div>
   <div class=" mt-n2 mb-3 fw-bold fs-6 text">
   @if($errors->has('Department'))
   {{$errors->first('Department')}}
   @endif
   <div class="mb-3  w-50">
   <label class="form-lable">EmailAddress</label>
   <input type="Email" name="EmailAddress" value="{{$doctor->EmailAddress}}" class="form-control" id="EmailAddress" placeholder="Enter EmailAddress">
   </div>
   <div class=" mt-n2 mb-3 fw-bold fs-6 text">
   @if($errors->has('EmailAddress'))
   {{$errors->first('EmailAddress')}}
   @endif
   <div class="mb-3  w-50">
   <label class="form-lable">Password</label>
   <input type="Password" name="Password" value="{{$doctor->Password}}" class="form-control" id="Password" placeholder="Enter Password">
   </div>
   <div class="mb-3  w-50">
   <div class=" mt-n2 mb-3 fw-bold fs-6 text">
   @if($errors->has('Password'))
   {{$errors->first('Password')}}
   @endif
</div>
             <div class="mb-3  w-50">    
             <label class="form-lable">Date of Birth</label>
             <input type="date" class="form-control" value="{{old('$doctor->DateofBirth')}}" name="DateofBirth" id="appointmentname" placeholder="Enter appointmentname ">
             @if($errors->has('DateofBirth'))
             <p style="color:red;">{{$errors->first('DateofBirth')}}</p>
             @endif
              </div>
 
                  <div class="mb-3  w-50">
                    <label class="form-lable">Contactnumber</label>
                    <input type="number" name="Contactnumber" value="{{$doctor->Contactnumber}}" class="form-control" id="Contactnumber" placeholder="Enter ContactNumber">
                  </div>
                  <div class="mb-3  w-50">
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Contactnumber'))
                    {{$errors->first('Contactnumber')}}
                  @endif
                  <div class="md-3 ">
                  
                    <label class="form-lable">Sex</label>
                    <input type="radio" name="Sex" value="male"  id="Sex" placeholder="Enter Sex">male
                    <input type="radio" name="Sex" value="female" id="Sex" placeholder="Enter Sex">feMale
                    <input type="radio" name="Sex" value="Other" id="Sex" placeholder="Enter Sex">Other
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Sex'))
                    {{$errors->first('Sex')}}
                  @endif
                  
              <div>
                  <div class="mb-3 ">
                    <label class="form-lable">Status</label>
                    <input type="radio" name="Status" value="active"  id="Status" placeholder="Enter Status">active
                    <input type="radio" name="Status" value="inactive"  id="Status" placeholder="Enter Status">inactive
                    <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Status'))
                    {{$errors->first('Status')}}
                  @endif

               <input type="hidden" value="{{$doctor->id}}" name="id"/>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary">Update Ticket</button>
                </div>
            <!-- /.card -->
            </section>
            @endsection