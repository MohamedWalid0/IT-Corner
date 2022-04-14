@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <button type="button " class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
            Add New Patient
        </button>


        <table class="table my-4">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Current Appointments</th>
                <th scope="col">Appointment</th>
                <th scope="col">Bill</th>



            </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient )
                    <tr>
                        <th scope="row">{{ $loop->iteration + $patients->firstItem() - 1 }} </th>
                        <td>
                            <a href="{{ route('patients.show' , $patient ) }}">
                                {{ $patient->name }}
                            </a>
                        </td>
                        <td>{{ $patient->age }} </td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ Str::limit($patient->address, 20) }}</td>

                        <td>
                            @if ($patient->appointments->count())
                                @foreach ( $patient->appointments as $appointment)

                                    <p>{{ $appointment->day->name . ',' . $appointment->start_time }}</p>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <button type="button " class="btn btn-warning" data-toggle="modal" data-target="#bookAppointmentModal-{{ $patient->id }}">
                                Book
                            </button>
                        </td>

                        <td>
                            <a href="{{ route('bills.show' , $patient ) }} " class="btn btn-primary">
                                Bill
                            </a>
                        </td>

                    </tr>
                    @include('patients.modals.bookAnAppointment' , $patient)

                @endforeach

            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $patients->links() }}
        </div>

        @include('patients.modals.addPatient')


    </div>
@endsection
