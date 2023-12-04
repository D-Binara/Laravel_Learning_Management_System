<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AddSubjectController extends Controller
{
    public function addSubject()
    {
        return view('admin.addSubject');
    }


    public function addSubjectToDB(Request $request)
    {


        $subject = new Subject;
        $subject->subject_name = $request->subject_name;
        $subject->subject_credit = $request->subject_credit;

        $image = $request->file('subject_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'public/subject_images/';
        $image->move($imagePath, $imageName);

        // Save image path to the subject
        $subject->subject_image = $imagePath . $imageName;


        $subject->save();

//        Alert::success('subject added successfully');

        return redirect()->back();
    }
}
