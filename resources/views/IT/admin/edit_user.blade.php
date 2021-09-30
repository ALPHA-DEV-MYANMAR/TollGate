@extends('layouts.master')


@section('title','edit_user')

@section('content')

@section('action')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark ">
                    <div class="text-center text-white" style="margin-top: 20px">
                        <h5>  <b> <i> Edit User </i> </b> </h5>
                    </div>

                        <table class="table table-dark table-bordered text-center">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th>Permission</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>   
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    <span class="badge badge-primary"> {{ $role->name }}</span>
                                                @endforeach    
                                            </td> 
                                            <td>
                                                <a href="{{ url('/manage/'.$user->id) }}" type="button" class="btn btn-danger btn-sm"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                @endforeach

                            </tbody>
                        </table>

                        {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>

@endsection