@extends('layouts.master')
@section('main')
<div class="row">
{{ Form::model( ['route' => ['users.update', $user->id], 'method' => 'put', 'role' => 'form'] ) }}
        <label for="exampleInputEmail1">firstName</label>
        {{ Form::text('first_name',$user->first_name) }}<br>
        <label for="exampleInputEmail1">Lastname</label>
        {{ Form::text('last_name', $user->last_name) }}<br>
        <label for="exampleInputEmail1">UsersName</label>
        {{ Form::text('username',$user->username) }}<br>
        <label for="exampleInputEmail1">Email</label>
        {{ Form::text('email',$user->email) }}<br>
        <label for="exampleInputEmail1">Phone</label>
        {{ Form::text('phone',$user->phone) }}<br>
        <label for="exampleInputEmail1">password</label>
        {{ Form::text('password',$user->password) }}<br>
        {{ Form::button('Save', ['type' => 'submit']) }}              
{{ Form::close() }}
</div>
@endsection