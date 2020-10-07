<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
      return view('studentform');
    }
    
    public function store(Request $request)
    {
      $students = new Student;
      
      $students->fname = $request->input('fname');
      $students->lname = $request->input('lname');
      $students->course = $request->input('course');
      $students->section = $request->input('section');
      
      $students->save();
    }
    
}
