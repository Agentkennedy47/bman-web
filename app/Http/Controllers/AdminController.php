<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Display admin profile information
    public function Profile () {

        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    }

    // Display admin edit profile information
    public function EditProfile () {

        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('admin.admin_edit_profile', compact('editData'));
    }

    // Store admin profile information
    public function StoreProfile (Request $request) {

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_image')) {

            $file = $request->file('profile_image');

            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload/admin'), $filename);

            $data['profile_image'] = $filename;
        }

        $data->save();

        $notification = array(

            'message' => 'Profile is updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.profile')->with($notification);
    }

    // Display admin change password 
    public function ChangePassword () {

        return view('admin.admin_change_password');
    }

    // Update admin password 
    public function UpdatePassword (Request $request) {

        $validateData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        $hashedPassword = Auth::user()->password;

        if(Hash::check($request->current_password, $hashedPassword)){

            $users = User::find(Auth::id());

            $users->password = bcrypt($request->new_password);

            $users->save();

            session()->flash('message', 'Password updated successfully');

            return redirect()->back();

        }else{

            session()->flash('message', 'Current password does not match');

            return redirect()->back();
        }
    }

    // Destroy authenticated session
    public function destroy (Request $request) {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(

            'message' => "You've logged out successfully",
            'alert-type' => 'success',
        );

        return redirect('/login')->with($notification);
    } 

}
