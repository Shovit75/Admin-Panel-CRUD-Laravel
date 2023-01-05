@extends('layouts.main')
@section('main-content')
<div class="container">    
    <a href="{{url('/create')}}">
    <button class='btn btn-primary d-inline-block m-2 float-right'>Create</button>
    </a>

    <table class="table">
        <thead>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $datas)
            <tr>
                <td>{{$datas->name}}</td>
                <td>{{$datas->email}}</td>
                <td>{{$datas->address}}</td>
                <td>{{$datas->password}}</td>
                <td>
                    <a href="{{url('/edit/')}}/{{$datas->users_id}}" class='btn btn-success'>
                        Update
                    </a>
                    <a href="{{url('/delete/')}}/{{$datas->users_id}}" class='btn btn-danger'>
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection