<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use PhpParser\Node\Expr\Cast\String_;

class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'name'              =>  'required',
            //'StudentID'         =>  'required',
            //'nickname'         =>  'required',
            //'IdCardNumber'         =>  'required',
            // 'BirthDay'         =>  'required',
            // 'Faculty'         =>  'required',
            // 'Subject'         =>  'required',
            // 'AcademicYear'         =>  'required',
            // 'Degrees'         =>  'required',
            // 'Tel'         =>  'required',
            // 'Facebook'         =>  'required'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');
        $user->StudentID = $request->input('StudentID');
        $user->egname = $request->input('egname');
        $user->nickname = $request->input('nickname');
        $user->IdCardNumber = $request->input('IdCardNumber');
        $user->BirthDay = $request->input('BirthDay');
        $user->Faculty = $request->input('Faculty');
        $user->Subject = $request->input('Subject');
        $user->AcademicYear = $request->input('AcademicYear');
        $user->Degrees = $request->input('Degrees');
        $Student_StatusID = $request->get('StudentOldStatus_Id ');
        $user->email = $request->input('email');
        $user->Tel = $request->input('Tel');
        $user->Facebook = $request->input('Facebook');

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str_slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }
}
