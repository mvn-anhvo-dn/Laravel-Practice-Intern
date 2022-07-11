@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>User Management</h3>
                    </div>
                    <div class="col-md-6">
                    <a href="{{route('user.create')}}" class="btn btn-primary float-end">Create User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <table class="table table-hover">
               <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
               </thead>
               <tbody>
                    @foreach ($user as $us)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$us->name}}</td>
                            <td>{{$us->email}}</td>
                            <td>
                                <form action="{{route('user.destroy', $us->id)}}" method="POST">
                                    <a href="{{route('user.edit', $us->id)}}" class="btn btn-info">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
            </table>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection