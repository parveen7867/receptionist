<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token"  content="{{csrf_token()}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <title>assign bed</title>
   

</head>
<body>



@extends('.welcome') 

@section('content')

  

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Bed</h1>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('store.assignbed')}}" method="post">

              @csrf
                
                
                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  <div class="w-50">
                  <label for="patient">Patient Name</label>
                 <select class="form-control" id="Patient" name="Patient" class="form-control">
                 <option value="">Patient Name</option>
               @foreach($Patient as $patient1)
                 <option value="{{$patient1->id}}">{{$patient1->FirstName}}</option>
               @endforeach
             </select> 
             </div>

                  <div class=" mt-n2 mb-3 fw-bold fs-6 text">
                  <div class="w-50">
                  <label for="block">block</label>
                  <select class="form-control" id="block" name="block_id"   class="form-control">
                  <option value=""> Select block</option>
                    @foreach($blocks as $block)
        <option value="{{ $block->id }}">{{ $block->blockName}}</option>
    @endforeach
</select>

                  <label for="block">Select Floor</label> 
<select class="form-control" id="floor" name="floor_id">
<option value=""> Select floor</option>

        </select>   
        
        <label for="block">Select Bed</label>
<select class="form-control" id="bed" name="bedd_id">
    <option value=""> Select Bed</option>
    @foreach($beds as $bed)
        <option value="{{ $bed->id }}">
            {{ $bed->bedsName }} (Floor: {{ $bed->floor->floorName }})
        </option>
    @endforeach
</select>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 
        <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    $('#block').change(function() {
        var floor_id = $(this).val();
        if (floor_id) { 
            $.ajax({
                url: "{{ url('/getfloor') }}/" + floor_id,
                type: 'get',
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    $('#floor').html(data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });

    $('#floor').change(function() {
        var floor_id = $(this).val();
        if (floor_id) {
            $.ajax({
                url: "{{ url('/getbeds') }}/" + floor_id,  
                type: 'get',
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    $('#bed').html(data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        } else {
            $('#bed').html('<option value="">Select Bed</option>');
        }
    });
});

    
</script>
  
    




  


                  <button type="reset">reset</button>
                  <button type="submit">submit</button>
                 
                <!-- /.card-body

       
       
            </section>
   @endsection
   </body>
</html>