@extends('.welcome')
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
      @if(session('success'))
   <div class="alert alert-success">
    <strong>Success>>></strong>{{session('success')}}
    </div>
    @endif
    @if(session('error'))
   <div class="alert alert-danger">
    <strong>Failed>>></strong>{{session('error')}}
    </div>
    @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
              
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" > Prescription List  <button type="submit"><a href="{{route('add.prescription')}}"> Add Prescription</a></button></h3>

               
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="myDataTable" class="table table-bordered table-striped">
                  <thead>
                
                    <tr>
                    <th>S.NO</th>
                     <th>Patient_id</th> 
                     <th>Foodallergies</th> 
                     <th>Tendencybleed</th> 
                     <th>Heartdisease</th> 
                     <th>Highbloodpressure</th> 
                     <th>Diabetic</th>
                     <th>Surgery</th> 
                     <th>Accident</th> 
                     <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($prescription as $prescription1)
                    <tr>
                      <td> <button type="submit"><a href="{{route('index.select')}}">+</a></button>{{$loop->index+1}}</td>
                      <td>{{$prescription1->patientid}}</td>
                      <td>{{$prescription1->foodallergies}}</td>
                      <td>{{$prescription1->tendencybleed}}</td>
                      <td>{{$prescription1->heartdisease}}</td>
                      <td>{{$prescription1->highbloodpressure}}</td>
                      <td>{{$prescription1->diabetic}}</td>
                      <td>{{$prescription1->surgery}}</td>
                      <td>{{$prescription1->accident}}</td>
               
                    
                      <td> <a class="btn btn-primary" href="{{url('editprescription/')}}/{{$prescription1->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a> &nbsp;
<a class="btn btn-danger" href="{{url('deleteprescription/')}}/{{$prescription1->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></a></td>
@endforeach
                    </tr>
        
                  </tbody>
                </table>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
                
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection