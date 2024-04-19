@extends('.welcome')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit prescription</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@if(session('success'))
<div class="alert mx-auto alert-success">
    <strong>Success!</strong> {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    <strong>Error!</strong> {{ session('error') }}
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
        <form action="{{ route('update.prescription') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <div class="mb-3 w-50">
                    <label class="form-label">patient_id</label>
                    <input type="text" name="patientid" value="{{ $prescription->patientid }}" class="form-control"
                        id="patient_id" placeholder="Enter patient_id">
                    
                    <div class="mt-n2 mb-3 fw-bold fs-6 text-blue"></div>
                    @if($errors->has('patientid'))
                    {{ $errors->first('patientid') }}
                    @endif
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label">foodallergies</label>
                    <input type="text" name="foodallergies" value="{{ $prescription->foodallergies }}" class="form-control"
                        id="foodallergies" placeholder="Enter foodallergies">
               
                    <div class="mt-n2 mb-3 fw-bold fs-6 text-blue"></div>
                    @if($errors->has('foodallergies'))
                    {{ $errors->first('foodallergies') }}
                    @endif
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label">tendencybleed</label>
                    <input type="text" name="tendencybleed" value="{{ $prescription->tendencybleed }}"
                        class="form-control" id="FirstNmae" placeholder="Enter tendencybleed">
                </div>
                <div class="mt-n2 mb-3 fw-bold fs-6 text">
                    @if($errors->has('tendencybleed'))
                    {{ $errors->first('tendencybleed') }}
                    @endif
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label">heartdisease</label>
                    <input type="text" name="heartdisease" value="{{ $prescription->heartdisease }}"
                        class="form-control" id="heartdisease" placeholder="Enter heartdisease">
                </div>
                <div class="mt-n2 mb-3 fw-bold fs-6 text">
                    @if($errors->has('heartdisease'))
                    {{ $errors->first('heartdisease') }}
                    @endif
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label">highbloodpressure</label>
                    <input type="text" name="highbloodpressure" value="{{ $prescription->highbloodpressure }}"
                        class="form-control" id="highbloodpressure" placeholder="Enter highbloodpressure">
                </div>
                <div class="mt-n2 mb-3 fw-bold fs-6 text">
                    @if($errors->has('highbloodpressure'))
                    {{ $errors->first('highbloodpressure') }}
                    @endif
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label">diabetic</label>
                    <input type="text" name="diabetic" value="{{ $prescription->diabetic }}" class="form-control"
                        id="diabetic" placeholder="Enter diabetic">
                </div>
                <div class="mt-n2 mb-3 fw-bold fs-6 text">
                    @if($errors->has('diabetic'))
                    {{ $errors->first('diabetic') }}
                    @endif
                </div>
                <div class="mb-3 w-50">
                    <label class="form-label">surgery</label>
                    <input type="text" name="surgery" value="{{ $prescription->surgery }}" class="form-control"
                        id="surgery" placeholder="Enter surgery">
                </div>
                <div class="mb-3 w-50">
                    <div class="mt-n2 mb-3 fw-bold fs-6 text">
                        @if($errors->has('surgery'))
                        {{ $errors->first('surgery') }}
                        @endif
                    </div>
                    <div class="mb-3 w-100">
                        <label class="form-label">surgery</label>
                        <input type="text" name="surgery" value="{{ $prescription->surgery }}" class="form-control"
                            id="surgery" placeholder="Enter surgery">
                    </div>
                    <div class="mb-3 w-50">
                        <div class="mt-n2 mb-3 fw-bold fs-6 text">
                            @if($errors->has('surgery'))
                            {{ $errors->first('surgery') }}
                            @endif
                        </div>
                        <div class="mb-3 w-100">
                            <label class="form-label">accident</label>
                            <input type="text" name="accident" value="{{ $prescription->accident }}"
                                class="form-control" id="accident" placeholder="Enter accident">
                        </div>
                        <div class="mb-3 w-50">
                            <div class="mt-n2 mb-3 fw-bold fs-6 text">
                                @if($errors->has('accident'))
                                {{ $errors->first('accident') }}
                                @endif
                            </div>
                            <input type="hidden" value="{{ $prescription->id }}" name="id" />
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary w-100">Update Ticket</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /.card -->
</section>
@endsection
