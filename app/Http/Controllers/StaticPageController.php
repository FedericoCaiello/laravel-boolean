<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function index()
    {
      $students =config('students.students');
      dd($students);
      return view('staticpages.index');
    }
    public function privacy()
    {

    }
    public function faq()
    {

    }
}
