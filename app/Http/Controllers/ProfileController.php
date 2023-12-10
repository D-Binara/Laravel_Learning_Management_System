<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function profile(){
        $details = Auth::user();
        return view('student.profile',compact('details'));
    }
}
