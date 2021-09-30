@extends('layouts.master')


@section('title','edit_user')

@section('content')

@section('action')

<form action="{{ url('/managing/'.$manage_user->id ) }}" method="POST">
    @csrf
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center" style="margin-top: 20px">
                        <h5>  <b> <i> Manage User </i> </b> </h5>
                    </div>
                        <div style="margin-top: 20px;text-align:center">
                            <span class="badge badge-pill badge-danger"><i> Name - {{ $manage_user->name }}</i></span>
                        </div>

                        <div style="margin-top: 20px;text-align:center">
                            <span class="badge badge-pill badge-danger"><i>Email - {{ $manage_user->email }}</i> </span>
                        </div>

                        <div>
                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        @foreach ($roles as $role)
                                            <input type="checkbox" name="role_id[]" value="{{ $role->id }}" 
                                            @foreach ($manage_user->roles as $userRole )
                                                @if ($userRole->name == $role->name)
                                                    checked
                                                @endif
                                            @endforeach
                                            >
                                                <label>{{ $role->name }}</label><br>
                                        @endforeach
                                    </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>

                        <div>
                            <div class="row text-center" style="margin-top: 20px">
                                <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-sm">submit</button>
                                    </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>

                        <div>
                            <div class="row text-center" style="margin-top: 20px">
                                
                            </div>
                        </div>

                </div>
            </div>
        <div class="col-md-3"></div>

    </div>
</div>

</form>

@endsection