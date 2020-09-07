@extends('layouts.master')
@section('main')
  <div class="row">
  {{ Form::model( ['route' => 'users.store', 'method' => 'post', 'role' => 'form'] ) }}
      <label for="exampleInputEmail1">FirstName</label><br>
    {{ Form::text('first_name')}}<br>
      <label for="exampleInputEmail1">Lastname</label><br>
    {{ Form::text('last_name')}}<br>
      <label for="exampleInputEmail1">UsersName</label><br>
    {{ Form::text('username')}}<br>
      <label for="exampleInputEmail1">Email</label><br>
    {{ Form::text('email')}}<br>
      <label for="exampleInputEmail1">Phone</label><br>
    {{ Form::text('phone')}}<br>
      <label for="exampleInputEmail1">Password</label><br>
    {{ Form::text('password')}}<br>
    {{ Form::button('Save', ['type' => 'submit']) }}
  {{ Form::close()}}
  </div><br>
  <!-- <a class="btn btn-primary" >Add</a> -->
@endsection