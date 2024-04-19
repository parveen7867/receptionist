@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Import CSV</h1>
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
                  <form action="{{route('import.Patient')}}" method="post">
                  @csrf
                
            
                  <div class="form-group">
                  <div class="mb-3  w-50">
                    <label for="name">Choosefile </label>
                    <input type="file" class="form-control" value="{{old('Choosefile')}}" name="Choosefile" id="Choosefile" placeholder="Enter Choosefile">
                    @if($errors->has('Choosefile'))
                    <p style="color:red;">{{$errors->first('Choosefile')}}</p>
                    @endif

                    <button type="reset">reset</button>
                  <button type="submit">submit</button>
                 
                  </div>
</form>
                  </section>
   @endsection