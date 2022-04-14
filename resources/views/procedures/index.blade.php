@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <button type="button " class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
            Add New Procedure
        </button>


        <table class="table mt-4">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Procedure Name</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($procedures as $procedure )
                    <tr>
                        <th scope="row">{{ $loop->iteration + $procedures->firstItem() - 1 }} </th>
                        <td>{{ $procedure->name }}</td>
                        <td>{{ $procedure->cost }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        @include('procedures.modals.addProcedure')

    </div>
@endsection
