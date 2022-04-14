@extends('layouts.layout')

@section('content')
    <div class="w-25 m-auto pt-5">


        <div class="card">
            <div class="card-header">
                Procedures
            </div>
            <div class="card-body">
            <blockquote class="blockquote mb-0">

                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">

                        @foreach ($procedures as $procedure )
                            <li class="list-group-item">{{ $procedure->name }}</li>
                            <span class="badge badge-dark">{{ $procedure->cost }} LE.</span>
                        @endforeach

                    </ul>


                    <div class="card-footer text-muted">
                        Total :
                        {{ $procedures->sum('cost') }}
                    </div>

                </div>

                <footer class="blockquote-footer">Thank you . <cite title="Source Title">Clinic Name</cite></footer>
            </blockquote>
            </div>
        </div>

    </div>

@endsection
