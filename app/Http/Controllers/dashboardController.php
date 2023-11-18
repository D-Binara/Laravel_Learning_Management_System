<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $subjects = Subject::all();

        return view('dashboard',compact('subjects'));
    }

}
