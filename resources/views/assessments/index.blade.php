@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <button type="button " class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
            Add New Assessment
        </button>


        <table class="table mt-4">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Assessment Name</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($assessments as $assessment )
                    <tr>
                        <th scope="row">{{ $loop->iteration + $assessments->firstItem() - 1 }} </th>
                        <td>{{ $assessment->name }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        @include('assessments.modals.addassessment')

    </div>
@endsection
