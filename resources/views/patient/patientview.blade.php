@extends('Admin.patientdashboard')

@section('content')
<div class="container">
    <h1>Patient Information</h1>

    <div class="row">
        <div class="col-md-6">
            <h2>User Information</h2>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
          
        </div>

        <div class="col-md-6">
            <h2>Patient Information</h2>
            <p><strong>First Name:</strong> {{ $patient->FirstName }}</p>
            <p><strong>Last Name:</strong> {{ $patient->LastName }}</p>
            <p><strong>Email:</strong> {{ $patient->email }}</p>
        
        </div>
    </div>


</div>
@endsection
