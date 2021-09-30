@extends('layouts.master')

@section('title','Single')

@section('content')

@section('action')

    <div class="container">

        <div class="card">
            <div class="row">
                <div class="col-md-6" style="margin-top:10px">
                    <img src="{{ asset('upload/img/'.$singledata->imp_car_img) }}" alt="" style="width: 100%">
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Date - {{ $singledata->data_time }}</li>
                        <li class="list-group-item">TC - {{ $singledata->tc_no }}</li>
                        <li class="list-group-item">Lane - {{ $singledata->lane }}</li>
                        <li class="list-group-item">Car number - {{ $singledata->car_no }}</li>
                        <li class="list-group-item">Class - {{ $singledata->car_class }}</li>
                        <li class="list-group-item">Fees - {{ $singledata->frees }}</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection