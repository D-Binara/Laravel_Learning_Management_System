<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $subject->subject_code = $request->subject_code;
        $subject->subject_credit = $request->subject_credit;

        $image = $request->file('subject_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'public/subject_images/';
        $image->move($imagePath, $imageName);

        // Save image path to the subject
        $subject->subject_image = $imagePath . $imageName;


        $subject->save();

//        Alert::success('subject added successfully');


        // Generate HTML for the subject page
        $htmlContent = $this->generateSubjectPage($subject);

        // Save HTML content to a file or database
        // For example, saving to a file
        $filePath = 'resources/views/student/subject_pages/';
        $fileName = $subject->subject_code . '.html';
        Storage::disk('public')->put($filePath . $fileName, $htmlContent);

        return redirect()->back();
    }

    private function generateSubjectPage($subject)
    {
        // Generate HTML content for the subject page using subject details
        $html = "<html><head><title>{$subject->subject_name}</title></head><body>";
        $html .= "<h1>{$subject->subject_name}</h1>";
        // ... Add more HTML content for the subject details
        $html .= "</body></html>";

        return $html;
    }

}
