@extends('layouts.main')
@section('main-content')

<form class="container" action="{{$url}}" method="POST">
    @csrf 
    <br>
    <h1 class="text-center">User Registration || Updation</h1>
    <br>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="" class="form-control">
    <span class='text-danger'>
        @error('name')
            {{$message}}
        @enderror
    </span>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" id="" class="form-control" name="email">
    </div>
    <span class='text-danger'>
        @error('email')
            {{$message}}
        @enderror
    </span>
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" id="" class="form-control" name="password">
    </div>
    <span class='text-danger'>
        @error('password')
            {{$message}}
        @enderror
    </span>
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="" class="form-control" name="address">
  </div>
  <span class='text-danger'>
        @error('name')
            {{$message}}
        @enderror
    </span>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
@endsection