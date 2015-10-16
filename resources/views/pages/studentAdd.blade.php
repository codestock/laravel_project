@extends('template')
@section('content')
<h3>Add a Student</h3>
<hr />

{!! Form::open(['url'=>'students']) !!}
	{!! Form::label('id','ID:') !!}
	{!! Form::text('sid') !!}
	
	{!! Form::label('name','Name:') !!}
	{!! Form::text('name') !!}
	
	{!! Form::label('email','Email:') !!}
	{!! Form::text('email') !!}
	
	{!! Form::label('program','Program:') !!}
	{!! Form::text('program') !!}
	
	{!! Form::submit('Add Article') !!}
{!! Form::close() !!}
@stop