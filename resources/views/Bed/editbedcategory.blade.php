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
  <form  action="{{route('update.bedcategory')}}" method="post"  enctype="multipart/form-data">
  @csrf
  @method('POST')

 
              
                  <div class="mb-3  w-50">    
                    <label for="name">bed Option</label>
                    <section name="category"  value="{{ $bedcategory->bedcategory}}"  size mulitiplesize="3" >
                        <option value="ICU beds">ICU beds</option>
                        <option value="General">General</option>
                        <option value="Special Rooms">Special Rooms</option>
                        <option value="VIP">VIP</option>
                        <option value="Extra-Large">Extra-Large</option>
</section>
                       </div>
                       <div class="mb-3  w-50"> 
                    <label for="name">Bed Count</label>
                    <input type="number" name="bedcount" value="{{$bedcategory->bedcount}}" class="form-control" id="bedcount" placeholder="Enter bedcount">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('bedcount'))
                    {{$errors->first('bedcount')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">Bed Number</label>
                    <input type="number" name="bedno" value="{{$bedcategory->bedno}}" class="form-control" id="bedno" placeholder="Enter bedno">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('bedno'))
                    {{$errors->first('bedno')}}
                  @endif
                       <div class="mb-3  w-50"> 
                    <label for="name">Description</label>
                    <input type="description" name="description" value="{{$bedcategory->description}}" class="form-control" id="description" placeholder="Enter description">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('description'))
                    {{$errors->first('description')}}
                  @endif
</div>
                       <div class="mb-3  w-50"> 
                    <label for="name">Status</label>
                    <input type="radio" name="status"  value="{{$bedcategory->status}}"   id="status" >Active
                    <input type="radio" name="status"  value="{{$bedcategory->status}}"  id="status">Inactive
                 
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('status'))
                    {{$errors->first('status')}}
                  @endif


               <input type="hidden" value="{{$bed->id}}" name="id"/>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary">Update Ticket</button>
                </div>
            <!-- /.card -->
            </section>
            @endsection