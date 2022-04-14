
@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <div class="jumbotron">
            <h1 class="display-4">{{ $patient->name }}</h1>
            <p class="lead"> {{ $patient->age }} Years </p>
            <p class="lead"> {{ $patient->phone }} </p>
            <p class="lead"> {{ $patient->address }} </p>

            <hr class="my-4">

            <button type="button " class="btn btn-warning" data-toggle="modal" data-target="#assignProcedureModal-{{ $patient->id }}">
                Assign Procedure
            </button>

        </div>

        <h2>Procedures :</h2>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                @foreach ($patient->procedures as $procedure )

                    <li class="list-group-item">
                        {{ $procedure->name }}
                        <span class="badge badge-dark">{{ $procedure->cost }} LE.</span>
                    </li>

                @endforeach
            </ul>
        </div>



        @include('patients.modals.assignProcedure' , $patient)

    </div>
@endsection
