@extends('template')

@section('content')
	@foreach($students as $student)
		<a href="students/{{ $student->sid }}">
			{{ $student->name }}
		</a>
		<br />
	@endforeach
@stop