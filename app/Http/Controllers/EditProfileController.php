<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function editProfile()
    {
        return view('student.editProfile');
    }

    public function editProfileDB(Request $request)
    {

        $details = new User;
        $details->username = $request->user_name;
        $details->phone = $request->phone_number;
        $details->mobile =$request->mobile_number;
        $details->address = $request->address;

        $image = $request->file('profile_picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'public/profile_picture/';
        $image->move($imagePath, $imageName);

        // Save image path to the subject
        $details->profile_picture = $imagePath . $imageName;


        $details->save();

        return back();
    }
}
