@extends('layouts.layout')

@section('content')
    <div class="w-25 m-auto pt-5">


        <div class="card">
            <div class="card-header">
                Examination Receipt
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p> Time > {{ \Carbon\Carbon::parse( $startTime )->format('H:i')  }}</p>
                <p> Date > {{ \Carbon\Carbon::parse( $startTime )->format('Y-m-d')  }}</p>

                <p> Type > {{  $visitType ->name }}</p>
                <span class="badge badge-dark w-100">{{ $visitType->cost }} LE.</span>

                <footer class="blockquote-footer">Thank you . <cite title="Source Title">Clinic Name</cite></footer>
              </blockquote>
            </div>
        </div>

    </div>
@endsection
