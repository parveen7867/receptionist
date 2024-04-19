@extends('.welcome') 

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Document</h1>
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
                  <form action="{{route('store.document')}}" method="post"   enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                  <div class="mb-3 w-50">
                    <label for="name">Patient Id</label>
                    <input type="text" class="form-control" value="{{old('patientid')}}" name="patientid" id="patientid" placeholder="Enter patientid ">
                    @if($errors->has('patientid'))
                    <p style="color:red;">{{$errors->first('patientid')}}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-50">
                    <label for="name">Choosefile </label>
                    <input type="file" class="form-control" value="{{old('file')}}" name="file" id="file" placeholder="Enter Choosefile">
                    
                    @if($errors->has('file'))
                    <p style="color:red;">{{$errors->first('file')}}</p>
                    @endif

                    
                   
                <label for="Role">Doctor Name</label>
                 <select class="form-control" id="doctor" name="doctor">
                 <div class="mb-3 w-50">
                 <option>Select</option>
               @foreach($doctor as $doctor1)
                 <option value="{{$doctor1->id}}">{{$doctor1->FirstName}}</option>
               @endforeach
             </select>
                </div>

                <div class="mb-3 w-50">
                    <label class="form-lable">Document Title</label>
                    <input type="text" class="form-control" value="{{old('documenttitle')}}" name="documenttitle" id="documenttitle" placeholder="Enter documenttitle ">
                    @if($errors->has('documenttitle'))
                    <p style="color:red;">{{$errors->first('documenttitle')}}</p>
                    @endif
                    </div>


                
                  <button type="reset">reset</button>
                  <button type="submit">send</button>
                 
                <!-- /.card-body

              
       
            </section>
   @endsection
