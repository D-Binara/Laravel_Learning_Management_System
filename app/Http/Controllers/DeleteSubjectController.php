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
        $subject = Subject::where('subject_name', $request)->firstorfail()->delete();

//        return redirect()->back();
    }
}
