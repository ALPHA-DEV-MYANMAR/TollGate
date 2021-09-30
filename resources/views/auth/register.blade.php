@extends('layouts.logview')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="text-center">

                <img src="{{ asset('local/maxlogo.png') }}" alt="" style="width: 200px">

            </div>

            <div class="card">

                <div class="card-body text-center">

                    <div class="text-center"> <h5><i><b>Register</b></i></h5>  </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 20px">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right"> <i><b>{{ __('Name') }}</b></i> </label> --}}
                            <label for="name" class="col-md-4 col-form-label text-md-right"> <i class="fas fa-user" style="color:rgb(0, 204, 255)"></i></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Enter User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right"><i><b>{{ __('Email Address') }}</b></i> </label> --}}
                            <label for="email" class="col-md-4 col-form-label text-md-right"><i class="fas fa-envelope" style="color:rgb(0, 204, 255)"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><i class="fas fa-key" style="color:rgb(0, 204, 255)"></i> </label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><i style="color:rgb(0, 204, 255)" class="fas fa-key"></i> </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Enter Comfirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info btn-sm">
                                    {{ __('Register') }}
                                </button>
                                
                                <a href="{{ route('login') }}" class="btn btn-danger btn-sm">Cancel</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
