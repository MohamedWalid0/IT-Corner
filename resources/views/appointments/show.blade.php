
@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <div class="jumbotron">
            <h1 class="display-4">{{ $appointment->patient->name }}</h1>
            <p class="lead"> {{ $appointment->patient->age }} Years </p>
            <p class="lead"> {{ $appointment->patient->phone }} </p>
            <p class="lead"> {{ $appointment->patient->address }} </p>

            <hr class="my-4">

            <button type="button " class="btn btn-primary" data-toggle="modal" data-target="#assignAssessmentModal-{{ $appointment->id }}">
                Assign Assessment
            </button>

            {{-- <button type="button " class="btn btn-warning" data-toggle="modal" data-target="#assignProcedureModal-{{ $appointment->id }}">
                Assign Procedure
            </button> --}}

        </div>

        <h2>Assessments :</h2>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                @foreach ($appointment->assessments as $assessment )

                    <li class="list-group-item">{{ $assessment->name }}</li>

                @endforeach
            </ul>
        </div>





        @include('appointments.modals.assignAssessment' , $appointment)
        {{-- @include('appointments.modals.assignProcedure' , $appointment) --}}

    </div>
@endsection
