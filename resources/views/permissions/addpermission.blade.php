
@extends('.welcome')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>permission</h1>
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
              <form action="{{route('store.per')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Role Name </label>
                    <input type="text" class="form-control" value="{{old('Role Name')}}" name="RoleName" id="name" placeholder="Enter Role Name">
                    @if($errors->has('RoleName'))
                    <p style="color:red;">{{$errors->first('RoleName')}}</p>
                    @endif
                  </div>
                  <button type="submit">submit</button>
                  
                <!-- /.card-body -->

              
        
</div>
</div>
</div>
            </section>
@endsection