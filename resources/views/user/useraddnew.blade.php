
@extends('.welcome')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session('success'))
   <div class="alert mx-auto alert-success w-50">
     <strong>Success!</strong> {{session('success')}}
   </div>
@endif
@if(session('error'))
   <div class="alert alert-danger ">
  <strong>Error!</strong> {{session('error')}}
   </div>
@endif
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('store.user')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                <label for="name"> Name </label>
                 <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="Enter U Name">
                 @if($errors->has('name'))
                 <p style="color:red;">{{$errors->first('name')}}</p>
                 @endif
                </div>
               
                <div class="form-group">
                  <div class="mb-3 ">
                    <label for="name">Picture </label>
                    <input type="file" class="form-control" value="{{old('pic')}}" name="pic" id="pic" placeholder="Enter picture">
                    @if($errors->has('pic'))
                    <p style="color:red;">{{$errors->first('pic')}}</p>
                    @endif
                  </div>
      
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> email </label>
                    <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Enter email">
                    @if($errors->has('email'))
                    <p style="color:red;">{{$errors->first('email')}}</p>
                    @endif
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="name">password </label>
                    <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password" placeholder="Enter password">
                    @if($errors->has('password'))
                    <p style="color:red;">{{$errors->first('password')}}</p>
                    @endif
                
                <button type="submit">submit</button>
                  
                <!-- /.card-body -->

              
        
</div>
</div>
</div>
            </section>
@endsection