@extends('welcome')

@section('content')


<div class="card">
    
    <div class="form-group">
        <h1>patient Details</h1>
        @if ($patient)
            <p><strong>First Name:</strong> {{ $patient->FirstName }}</p>
            <p><strong>Last Name:</strong> {{ $patient->LastName }}</p>
            <p><strong>Picture:</strong> <img src="{{ asset($patient->Picture) }}" width="100px" height="100px" /></p>
           
            <p><strong>EmailAddress :</strong> {{ $patient->EmailAddress}}</p>
            <p><strong>Sex :</strong> {{ $patient->Sex}}</p>
            <p><strong>Bloodgroup :</strong> {{ $patient->Bloodgroup}}</p>
            <p><strong>DateofBirth :</strong> {{ $patient->DateofBirth}}</p>
            <p><strong>Status:</strong> {{ $patient->Status}}</p>
        @else
            <p>patient not found.</p>
        @endif
    </div>
</div>
<a href="{{route('patient.list')}}">  <button type="submit">back</a></button></h3>
@endsection

