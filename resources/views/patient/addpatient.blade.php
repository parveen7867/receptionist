
@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Patient</h1>
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
              <form action="{{ route('Store.PatientData') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $user ? $user->id : '' }}" name="user_id"/>
                  <div class="form-group">
                  <div class="mb-3 w-50">
                    <label for="name">Picture </label>
                    <input type="file" class="form-control" value="{{old('Picture')}}" name="Picture" id="Picture" placeholder="Enter picture">
                    @if($errors->has('Picture'))
                    <p style="color:red;">{{$errors->first('Picture')}}</p>
                    @endif
                  </div>
                  <!--  -->
                  
                  <div class="mb-3 w-50">
                    <label for="name">FirstName </label>
                    <input type="text" class="form-control" value="{{old('FirstName')}}" name="FirstName" id="FirstName" placeholder="Enter FirstName ">
                    @if($errors->has('FirstName'))
                    <p style="color:red;">{{$errors->first('FirstName')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                  <label for="name">Last Name </label>
                    <input type="text" class="form-control" value="{{old('LastName')}}" name="LastName" id="LastName" placeholder="Enter Last Name">
                    @if($errors->has('LastName'))
                    <p style="color:red;">{{$errors->first('LastName')}}</p>
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
                 
                    <div>                   
                    <label for="radio"> Sex </label></br>
                    <input type="radio"  value="male" name="Sex" id="Sex" >male
                    <input type="radio"  value="female" name="Sex" id="Sex" >female
                    <input type="radio"  value="Other" name="Sex" id="Sex" >Other
                    @if($errors->has('Sex'))
      
                    <p style="color:red;">{{$errors->first('Sex')}}</p>
                    @endif
             
                    </div>   
                    <div class="mb-3 w-50">
                    <label for="name"> DateofBirth </label>
                    <input type="Date" class="form-control" value="{{old('DateofBirth')}}" name="DateofBirth" id="DateofBirth" placeholder="Enter DateofBirth">
                    @if($errors->has('DateofBirth'))
      
                    <p style="color:red;">{{$errors->first('DateofBirth')}}</p>
                    @endif
                  </div>
                    <div class="mb-3 w-50">
                  <label for="name"> Bloodgroup </label><br>

                    <input type="radio"  value="A+" name="Bloodgroup" id="Bloodgroup" placeholder="Enter Bloodgroup">A+
                    <input type="radio"  value="A-" name="Bloodgroup" id="Bloodgroup" placeholder="Enter Bloodgroup">A-
                    <input type="radio"  value="B+" name="Bloodgroup" id="Bloodgroup" placeholder="Enter Bloodgroup">B+
                    <input type="radio"  value="B-" name="Bloodgroup" id="Bloodgroup" placeholder="Enter Bloodgroup">B-
                    <input type="radio"  value="O" name="Bloodgroup" id="Bloodgroup" placeholder="Enter Bloodgroup">O
                  
                    @if($errors->has('Bloodgroup'))
      
                    <p style="color:red;">{{$errors->first('Bloodgroup')}}</p>
                    @endif
                  </div>
                
                  <div class="mb-3 w-50">
    <label for="Status">Status</label>
    <input type="radio" name="Status" value="Active" id="Status"> Active
    <input type="radio" name="Status" value="Inactive" id="Status"> Inactive          
                  <button type="reset">reset</button>
                  <button type="submit">submit</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection