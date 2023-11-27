<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddSubjectController extends Controller
{
    public function addSubject(){
        return view ('admin.addSubject');
    }
}
