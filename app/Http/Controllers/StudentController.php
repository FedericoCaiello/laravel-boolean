<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   private $students;

    public function __construct()
    {
      $this->getAllStudents();
      $this->students = App\student::all();
    }

    public function index()
    {
      $data = [
        'students' => $this->students,
        'genders' => ['m', 'f'],
        'title' => 'Carriere'
      ];
      return view('students.index');
    }

    public function show($id)
    {
      if(!array_key_exists( $id , $this->students)) {
         return abort('404');
      }
      $student = $this->students[$id];
      return view('students.show', compact('student'));
    }

    private function getAllStudents()  {

      $this->students = config('students.students');
      // dd($this->students);
    }
}
