<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    function subjectDisplay(){

        $subject = Subject::all();

        return view('admin.subjects',compact('subject'));
    }




}
