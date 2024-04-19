@extends('Dashboard.patientdashboard')

@section('content')
    <div class="container">
        <h1>Patient Appointments</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Patient Information</h2>
                <p><strong>Name:</strong> {{ $patient->FirstName }} {{ $patient->LastName }}</p>
                <p><strong>Email:</strong> {{ $patient->email }}</p>
                <p><strong>Sex:</strong> {{ $patient->Sex }}</p>
                <p><strong>Blood Group:</strong> {{ $patient->Bloodgroup }}</p>
                <p><strong>Date of Birth:</strong> {{ $patient->DateofBirth }}</p>
            </div>

            <div class="col-md-6">
                <h2>Appointments</h2>
                @if($appointments)
                    @if($appointments->count() > 0)
                        <ul>
                            <li>
                                <strong>Appointment Date:</strong> {{ $appointments->first()->appointmentdate }}
                                <br>
                                <strong>Doctor:</strong> {{ $appointments->first()->doctor->FirstName }}
                                <br>
                                <strong>Department:</strong> {{ $appointments->first()->doctor->Department }}
                            </li>
                        </ul>
                    @else
                        <p>No appointments available.</p>
                    @endif
                @else
                    <p>No appointments available.</p>
                @endif
            </div>
        </div>

@endsection
