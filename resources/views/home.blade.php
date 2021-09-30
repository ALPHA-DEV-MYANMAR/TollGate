@extends('layouts.master')

@section('title','home')

@section('content')

@section('action')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead class="bg-info">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Lane</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($tollColData as $data)
                        <tr>
                            <th scope="row" class="text-center">{{ $data->id }}</th>
                            <td class="text-center">{{ $data->lane }}</td>
                            <td class="text-center">{{ $data->data_time }}</td>
                            <td class="text-center">
                                <a href="{{ url('laneDetail') }}" type="button" class="btn btn-outline-success">detail</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection