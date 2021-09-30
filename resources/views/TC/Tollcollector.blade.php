@extends('layouts.app')

@section('title','Toll Collector')
@section('content')
<form action="{{ url('tollcollectors2') }}" method="POST" enctype="multipart/form-data" >
    @csrf
<div class="container">
    <div class="row">
        <div class="col-md-6">


            <div style="padding: 10px" class="text-center">
                <div class="card border-primary bg-dark">
                    <div class="card-body">
                        <img src="{{ asset('local/car_on.jpg') }}" id="profile-img-tag" width="100%" />
                    </div>
                </div>

                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h4 class="card-title text-danger" ><b>Vehicle NO - 1I-1234</b> </h4>
                        <input value="1I-1234" type="hidden" name="car_no" class="form-control">
                    </div>
                </div>
                
            </div>
        </div>


        <div class="col-md-6" style="padding: 10px">

            <div style="padding: 10px " >

                <b><i class="fas fa-calendar-alt"></i>&nbsp;Date - {{ $date }} </b>

            </div>

            <div class="card  border-primary" >
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-center"> <i>Choose Vehicle Class Name</i> </h5>
                    </div>
                </div>
                <div class="card-body">

                    <select class="form-control" name="class">
                        @foreach ($car_class as $class )
                        <option>CLASS-{{ $class->car_class }} </option>
                        @endforeach
                    </select> 
                    <br>
                    <div class="form-group">
                        <input type="file" name="image" id="profile-img" required>
                    </div>
                <div>      
            </div>
        </div>
    </div>

    <button class="btn btn-dark btn-lg" type="submit" style="margin-top: 20px" >Submit</button>

</div> 

</form>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>


@endsection