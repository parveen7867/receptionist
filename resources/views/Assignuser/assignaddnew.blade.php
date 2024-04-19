
@extends('.welcome')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Role to user</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item active"><a href="{{route('assign.store')}}">add  Assign role to user</a></li>
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
              <form action="{{route('store.assign')}}" method="post">
                @csrf
                <!-- <div class="card-body">
                  <div class="form-group">
                    <label for="name">Role Name </label>
                    <input type="text" class="form-control" value="{{old('Role Name')}}" name="RoleName" id="name" placeholder="Enter Role Name">
                    @if($errors->has('RoleName'))
                    <p style="color:red;">{{$errors->first('RoleName')}}</p>
                    @endif
                  </div>
                  <button type="submit">submit</button> -->
                  
                <!-- /.card-body -->

              
       <div class="w-50">
                <label for="Role">rolename</label>
                 <select class="form-control" id="permission" name="permission">
                 <option>Select</option>
               @foreach($perlist as $perlist1)
                 <option value="{{$perlist1->id}}">{{$perlist1->RoleName}}</option>
               @endforeach
             </select>
                </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  <div class="w-50">
                <label for="user">username</label>
                 <select class="form-control" id="user" name="user">
                 <option>Select</option>
               @foreach($userlist as $userlist1)
                 <option value="{{$userlist1->id}}">{{$userlist1->name}}</option>
               @endforeach
             </select>
                </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text-danger">
                  <button type="submit">submit</button>
</div>
</div>
</div>
            </section>
@endsection