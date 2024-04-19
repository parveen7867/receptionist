@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seelct Option</h1>
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
                  <form action="{{route('store.bedcategory')}}" method="post">
              @csrf
              </select>
               
              <div class="mb-3 w-50">
    <label for="bedcategory">Bed Category</label>
    <select name="bedcategory" class="form-select" id="category">
        <option selected disabled>Select Category</option>
        <option value="ICU beds">ICU beds</option>
        <option value="General">General</option>
        <option value="Special Rooms">Special Rooms</option>
        <option value="VIP">VIP</option>
        <option value="Extra-Large">Extra-Large</option>
    </select>
    @if($errors->has('bedcategory'))
        <p style="color:red;">{{ $errors->first('bedcategory') }}</p>
    @endif
</div>
</select>

                <div class="mb-3 w-50">
        <label for="bedcount">Bed Count</label>
        <input type="number" class="form-control" name="bedcount" id="bedcount" placeholder="Enter bed count">
        @if($errors->has('bedcount'))
            <p style="color: red;">{{ $errors->first('bedcount') }}</p>
        @endif
    </div>
    <div class="mb-3 w-50">
        <label for="bedno">Bed Number</label>
        <input type="number" name="bedno" class="form-control" id="bedno" placeholder="Enter bed number">
        @if($errors->has('bedno'))
            <p style="color: red;">{{ $errors->first('bedno') }}</p>
        @endif
    </div>
        <div class="mb-3 w-50">
        <label for="description">Description</label>
        <textarea name="description" rows="5" cols="80"></textarea>
        @if($errors->has('description'))
            <p style="color: red;">{{ $errors->first('description') }}</p>
        @endif
    </div>
    <div class="mb-3 w-50">
        <label for="status">Status</label>
        <input type="radio" name="status" value="Active" id="status_active" checked> Active
        <input type="radio" name="status" value="Inactive" id="status_inactive"> Inactive
        @if($errors->has('status'))
            <p style="color: red;">{{ $errors->first('status') }}</p>
        @endif
    </div>
    <button type="submit">Add</button>

                 
                 
                 
                <!-- /.card-body

              
       
            </section>
   @endsection
