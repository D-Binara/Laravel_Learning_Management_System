<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddStudentController extends Controller
{
    function addStudent(){
        return view('admin.addStudent');
    }

    function addStudentToDB(Request $request){

        $student = new User;
        $student -> name = $request->student_name;
        $student -> email = $request->student_email;
        $student ->password = Hash::make($request->password);

        $student->save();

        return back();
    }
}
