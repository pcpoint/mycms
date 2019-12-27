@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>

<div class="row">

<div class="col-sm-2">
    <img height="300" src="{{$user->photo ? $user->photo->file : 'https://placehold.co/300'}}" alt="" class="img-responsive img-rounded">
    </div>

<div class="col-sm-9">
   

{!! Form::model($user, ['method'=>'PATCH' ,'action'=>['AdminUsersController@update',$user->id], 'files'=>'true'])!!}

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
    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
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

<div class="form-group">
    {!! form::open(['method'=>'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete user', ['class'=> 'btn btn-danger']) !!}
    </div>
</div>

</div>
</div>
<div>@include('/includes.form_errors')
</div>
@endsection