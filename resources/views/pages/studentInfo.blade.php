@extends('template')
@section('content')
	@if($student)
		<h4>{{ $student->name }}</h4>
	@else
		<h4>Student not found</h4>
	@endif
@stop