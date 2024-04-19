@extends('.welcome')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Document</h1>
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
              <form  action="{{route('update.document')}}" method="post">
               @csrf
             
                  <div class="form-group">
                  <div class="mb-3  w-50"> 
                    <label for="">file</label>
                    <input type="file" name="file" value="{{$document->file}}" class="form-control" id="file" placeholder="Enter file">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('file'))
                    {{$errors->first('file')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">patientid</label>
                    <input type="text" name="patientid" value="{{$document->patientid}}" class="form-control" id="patientid" placeholder="Enter patientid">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('patientid'))
                    {{$errors->first('patientid')}}
                  @endif
                     </div>
                     <div class="mb-3  w-50"> 
                    <label for="name">DoctorName</label>
                    <input type="text" name="doctorname" value="{{$document->doctorname}}" class="form-control" id="doctorname" placeholder="Enter doctorName">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('doctorname'))
                    {{$errors->first('doctorname')}}
                  @endif
                  <div class="mb-3  w-50"> 
                    <label for="name">documenttitle</label>
                    <input type="text" name="documenttitle" value="{{$document->documenttitle}}" class="form-control" id="documenttitle" placeholder="Enter documenttitle">
                  </div>
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  @if($errors->has('documenttitle'))
                    {{$errors->first('documenttitle')}}
                  @endif
                 
               <input type="hidden" value="{{$document->id}}" name="id"/>
                <div class="card-footer ">
                <button type="submit" class="btn btn-primary w-100">Update Ticket</button>
                </div>
             
            <!-- /.card -->
       
            </section>
   @endsection