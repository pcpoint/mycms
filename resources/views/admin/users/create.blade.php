@extends('layouts.admin')

@section('content')

<h1>Create User</h1>

{!! Form::open(['method'=>'POST' ,'action'=>"AdminUsersController@store", 'files'=>'true'])!!}

<div class = "form-group px-5">
    {!! Form::label('name', 'Name:' ) !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group px-5">
    {!! Form::label('email ', 'Email:' ) !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group px-5">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', [''=>'Choose Option'] +  $roles, null, ['class'=>'form-control']) !!}
    
</div>

<div class = "form-group px-5">
    {!! Form::label('is_active', 'Status:' ) !!}
    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
</div>

<div class = "form-group px-5">
    {!! Form::label('photo_id', 'Photo:' ) !!}
    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>

<div class = "form-group px-5">
    {!! Form::label('password', 'Password:' ) !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
</div>

<div class="form-group px-5">
{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@include('/includes.form_errors')

@endsection