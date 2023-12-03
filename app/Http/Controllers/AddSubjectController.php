<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AddSubjectController extends Controller
{
    public function addSubject(){
        return view ('admin.addSubject');
    }


    public function addSubjectToDB(Request $request){

        $subject= new Subject;
        $subject->subject_name = $request->subject_name;
        $subject->subject_credit = $request->subject_credit;

        if ($request->hasFile('subject_image')) {
            $image = $request->file('subject_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'subject_images/';
            $image->move($imagePath, $imageName);

            // Save image path to the subject
            $subject->subject_image = $imagePath . $imageName;
        }

        $subject->save();

//        Alert::success('Payment added successfully', "You have successfully paid rs " );

        return redirect()->back();
    }
}
