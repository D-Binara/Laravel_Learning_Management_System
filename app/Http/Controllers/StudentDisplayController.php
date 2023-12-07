<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class StudentDisplayController extends Controller
{
    public function studentDisplay()
    {
        $student=User::where('admin',0)->get();

        return view('admin.studentDisplay',compact('student'));
    }




}
