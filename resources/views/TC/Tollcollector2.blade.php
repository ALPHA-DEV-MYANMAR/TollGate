@extends('layouts.app')

@section('title','Cash')
@section('content')
<form action="{{ url('/cash') }}" method="POST">
    @csrf
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div style="padding: 10px" class="text-center">
                <div class="card border-primary bg-dark">
                    <div class="card-body">
                        <img src="{{ asset('upload/img/'.$imp_car_img ) }}" id="profile-img-tag" width="100%" />
                    </div>
                </div>

                .<div class="card text-white bg-warning">
                    <div class="card-body">
                        <label for="">you can edit car number here</label>
                        <input value="1I-1234" name="car_no" class="form-control">
                        <input type="hidden" value="{{ $tc_no }}" name="tc_no">
                        <input type="hidden" value="{{ $lane }}" name="lane">
                        <input type="hidden" value="{{ $car_class_lay }}" name="car_class_lay">
                        <input type="hidden" value="{{ $frees }}" name="frees">
                        <input type="hidden" value="{{ $data_time }}" name="data_time">
                        <input type="hidden" value="{{ $imp_car_img }}" name="imp_car_img">

                    </div>
                </div>
                
            </div>
        </div>


        <div class="col-md-6" style="padding: 10px">
            <div class="card  border-primary" >
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-center"> <i>Cash</i> </h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><b>TC - {{ $tc_no }}</b></li>
                        <li class="list-group-item"><b>Lane - {{ $lane }}</b></li>
                        <li class="list-group-item"><b>Class - {{ $car_class_lay }}</b></li>
                        <li class="list-group-item"><b>Frees - {{ $frees }}ks</b></li>
                        <li class="list-group-item"><b>Date - {{ $data_time }}</b></li>
                    </ul>
                <div>      
            </div>
        </div>
    </div>

    <div style="margin-top: 20px">
        <button class="btn btn-dark btn-lg" type="submit">Cash</button>
        <button class="btn btn-dark btn-lg" type="button">Recived</button>
        <a href="{{ url('/tollcollectors') }}" type="button" class="btn btn-danger btn-lg">Cancel</a>
    </div>

</div> 

</form>


@endsection