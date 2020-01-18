@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="car-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastName ?? '-'}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('classes.index.edit', $user->id)}}"><i class="fa fa-pencil"></i>Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquam assumenda dignissimos dolores enim itaque minima numquam quae! A aperiam blanditiis consequatur corporis illo iste natus possimus, quisquam repellendus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
