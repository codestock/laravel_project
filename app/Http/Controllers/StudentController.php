<?php

namespace App\Http\Controllers;

use Request;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
		{
			$students = \App\student::all();
			return view ('pages.students')->with('students', $students);
		}
	
	 	public function show($sid)
		{
			$student = \App\student::find($sid);
			return view ('pages.studentInfo')->with('student', $student);
		}
	
		public function create()
		{
			return view ('pages.studentAdd');	
		}
	
		public function store()
		{
			$input = Request::all();
			\App\student::create($input);
			
			return redirect('students');
		}
}