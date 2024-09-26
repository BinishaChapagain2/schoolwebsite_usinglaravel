<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\student;
use App\Models\schoolclass;
use App\Models\schoolnotice;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard(){

    $students=student::count();
    $teachers=Teacher::count();
    $schoolclass=schoolclass::count();
    $schoolnotice=schoolnotice::count();


    return view('dashboard', compact('students','teachers','schoolclass','schoolnotice'));

    }
}
