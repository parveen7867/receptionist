@extends('.welcome')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Patient</h1>
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
              <form  action="{{route('update.Patient')}}" method="post">
               @csrf
               @method('Post')
                  <div class="form-group">
                  <div class="mb-3  w-50"> 
                    <label for="">Picture</label>
                    <input type="file" name="Picture" value="{{$patient->Picture}}" class="form-control" id="Picture" placeholder="Enter Picture">
                    <img src="{{ asset($patient->Picture) }}" width="50px" height="50px" />
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Picture'))
                    {{$errors->first('Picture')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">FirstName</label>
                    <input type="text" name="FirstName" value="{{$patient->FirstName}}" class="form-control" id="FirstName" placeholder="Enter FirstName">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('FirstName'))
                    {{$errors->first('FirstName')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">LastName</label>
                    <input type="text" name="LastName" value="{{$patient->LastName}}" class="form-control" id="LastName" placeholder="Enter LastName">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('LastName'))
                    {{$errors->first('LastName')}}
                  @endif
                 
                  <div class="mb-3  w-50"> 
                    <label for="name">EmailAddress</label>
                    <input type="Email" name="email" value="{{$patient->email}}" class="form-control" id="EmailAddress" placeholder="Enter EmailAddress">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('email'))
                    {{$errors->first('email')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">Password</label>
                    <input type="Password" name="password" value="{{$patient->password}}" class="form-control" id="Password" placeholder="Enter Password">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('password'))
                    {{$errors->first('password')}}
                  @endif
                  
                  <div class="mb-3  w-50"> 
                    <label for="name">Sex</label>
                    <input type="radio" name="Sex" value="Male"  id="Sex" placeholder="Enter Sex">Male
                    <input type="radio" name="Sex" value="Female"  id="Sex" placeholder="Enter Sex">FeMale
                    <input type="radio" name="Sex" value="Other"  id="Sex" placeholder="Enter Sex">Other
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Sex'))
                    {{$errors->first('Sex')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">Bloodgroup</label>
                    <input type="bloodgroup" name="Bloodgroup" value="{{$patient->Bloodgroup}}" class="form-control" id="Bloodgroup" placeholder="Enter Bloodgroup">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Bloodgroup'))
                    {{$errors->first('Bloodgroup')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">DateofBirth</label>
                    <input type="date" name="DateofBirth" value="{{$patient->DateofBirth}}" class="form-control" id="DateofBirth" placeholder="Enter DateofBirth">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('DateofBirth'))
                    {{$errors->first('DateofBirth')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">Status</label>
                    <input type="radio" name="Status"  value="{{$patient->Status}}"   id="Status" >Active
                    <input type="radio" name="Status"  value="{{$patient->Status}}"  id="Status">Inactive
                 
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('Status'))
                    {{$errors->first('Status')}}
                  @endif

               <input type="hidden" value="{{$patient->id}}" name="id"/>
                <div class="card-footer ">
                <button type="submit" class="btn btn-primary ">Update Ticket</button>
                </div>
             
            <!-- /.card -->
            </section>
   @endsection