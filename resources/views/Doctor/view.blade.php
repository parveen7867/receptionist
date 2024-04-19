@extends('welcome')

@section('content')


<div class="card">
   
    <div class="form-group">
        <h1>Doctor Details</h1>
        @if ($doctor)
            <p><strong>First Name:</strong> {{ $doctor->FirstName }}</p>
            <p><strong>Last Name:</strong> {{ $doctor->LastName }}</p>
            <p><strong>Picture:</strong> <img src="{{ asset($doctor->Picture) }}" width="100px" height="100px" /></p>
            <p><strong>Department :</strong> {{ $doctor->Department }}</p>
            <p><strong>EmailAddress :</strong> {{ $doctor->EmailAddress}}</p>
            <p><strong>Sex :</strong> {{ $doctor->Sex}}</p>
            <p><strong>Contactnumber :</strong> {{ $doctor->Contactnumber}}</p>
            <p><strong>DateofBirth :</strong> {{ $doctor->DateofBirth}}</p>
        @else
            <p>Doctor not found.</p>
        @endif
    </div>
</div>
<a href="{{route('doctor.list')}}">  <button type="submit">back</a></button></h3>
@endsection

