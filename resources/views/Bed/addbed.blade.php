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
                  <form action="{{route('store.bed')}}" method="post">
              @csrf
              </select>
               
              <div class="card-body">
              <div class="mb-3  w-50">    
                   <fieldset class="form-group">
                   <label for="name"> Slect Bed </label>
                    <select name="category" class="form-select" id="category" >
                    <option selected desabled>Select Category</option>
                        <option value="ICU beds">ICU beds</option>
                        <option value="General">General</option>
                        <option value="Spcial Rooms">Spcial Rooms</option>
                        <option value="ViP">VIP</option>
                        <option value="Extra-Large">Extra-Large</option>
                   
                    @if($errors->has('category'))
                    <p style="color:red;">{{$errors->first('category')}}</p>
                    @endif
                  </div>
                  </select>
                </fieldset>
                  <div class="mb-3 w-50">
                    <label for="name"> Description </label>
                 <textarea name="message" rows="5" cols="80"></textarea>
                    @if($errors->has('description'))
      
                    <p style="color:red;">{{$errors->first('description')}}</p>
                    @endif
                  </div>


                  <div class="mb-3 w-50">
    <label for="Status">Status</label>
    <input type="radio" name="status" value="Active" id="status_active" checked> Active
    <input type="radio" name="status" value="Inactive" id="status_inactive"> Inactive
</div>


                  @if($errors->has('status'))
                    <p style="color:red;">{{$errors->first('status')}}</p>
                    @endif
                  </div>


                  <button type="reset">reset</button>
                  <button type="submit">send</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection
