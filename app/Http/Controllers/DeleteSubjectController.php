<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class DeleteSubjectController extends Controller
{
    public function deleteSubject()
    {
        return view('admin.deleteSubject');
    }

    public function deleteSubjectFromDB(Request $request)
    {
        $subject = new Subject;
        $subject->subject_name = $request->subject_name;
        dump($subject);
        $subject->delete();
//        return redirect()->back();
    }
}
