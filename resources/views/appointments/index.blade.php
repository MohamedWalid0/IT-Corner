@extends('layouts.layout')

@section('content')

    <div class="container mt-5">


        <div class="dropdown mb-4">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Choose Day
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($days as $day )
                    <li><a class="dropdown-item" href="{{ route('appointments.index' , $day) }}">{{ $day->name }}</a></li>
                @endforeach
            </div>
        </div>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Visit Type</th>
                    <th scope="col">Day</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time </th>
                    <th scope="col">Details</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($appointments as $appointment )

                    <tr>

                        <th scope="row">{{ $loop->iteration + $appointments->firstItem() - 1 }} </th>
                            <td>
                                    {{ $appointment->patient->name }}
                            </td>
                            <td>{{ $appointment->visit_type->name }}</td>
                            <td>{{ $appointment->day->name }}</td>
                            <td>{{\Carbon\Carbon::parse($appointment->start_time)->format('H:i') }} </td>
                            <td>{{\Carbon\Carbon::parse($appointment->end_time)->format('H:i') }} </td>
                            <td>
                                <a href="{{ route('appointments.show' , $appointment ) }}" class="btn btn-outline-primary">
                                    Details
                                </a>
                            </td>


                    </tr>

                @endforeach

            </tbody>
        </table>


        <div class="d-flex justify-content-center">
            {{ $appointments->links() }}
        </div>

    </div>



@endsection
