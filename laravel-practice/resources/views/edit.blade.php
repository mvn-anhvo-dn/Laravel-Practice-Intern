@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Edit User</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('user.index')}}" class="btn btn-primary float-end">List User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $user->id)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name ="name" value="{{$user->name}}" class="form-control" placeholder="Input Name">
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name ="email" value="{{$user->email}}" class="form-control" placeholder="Input Email">
                            </div>
                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="password" name ="password" class="form-control" placeholder="Input Password">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Edit</button>
            </form>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection