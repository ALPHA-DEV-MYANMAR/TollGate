@extends('layouts.logview')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="text-center">

                <img src="{{ asset('local/maxlogo.png') }}" alt="" style="width: 200px">

            </div>

            <div class="card" style="margin-top: 20px">
                
                <div class="card-body">

                    <div class="text-center" > <h5><b> <i style="color: rgb(0, 225, 255)">Login</i> </h5> </b>  </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 20px">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><i style="color: rgb(0, 255, 225)" class="fas fa-at"></i> </label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Enter Email Address" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><i style="color: rgb(0, 225, 255)" class="fas fa-lock-open"></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info btn-sm">
                                    {{ __('Login') }}
                                </button>
                                <br>

                                <div style="margin-top: 10px">
                                    @if (Route::has('password.request'))
                                    Register&nbsp;<a  href="{{ route('register') }}">here</a>
                                @endif
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
