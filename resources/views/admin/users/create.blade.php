@extends('layouts.admin')

@section('content')

<h1>Create User</h1>

{!! Form::open(['method'=>'POST' ,'action'=>"AdminUsersController@store"])!!}
<div class = "form-group px-5">
    {!! Form::label('name', 'Name:' ) !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group px-5">
{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

</div>

@endsection