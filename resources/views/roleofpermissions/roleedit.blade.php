@extends('.welcome')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> List</a></li>
              <li class="breadcrumb-item active">Categoies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@if(session('error'))
   <div class="alert alert-danger ">
  <strong>Error!</strong> {{session('error')}}
   </div>
@endif
<div class=" w-50 mx-auto card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('update.per')}}" method="post">
               @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">rolename</label>
                    <input type="text" name="RoleName" value="{{$role->RoleName}}" class="form-control" id="exampleInputEmail1" placeholder="Enter RoleName">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  @if($errors->has('name'))
                    {{$errors->first('name')}}
                  @endif
               <input type="hidden" value="{{$role->id}}" name="id"/>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary w-100">Update Ticket</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@endsection