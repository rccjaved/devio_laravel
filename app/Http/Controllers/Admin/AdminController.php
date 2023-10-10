<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLogout(){
        Auth::logout();
        return redirect()->route('login');
    }//end of function

    public function AdminUserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.profile.profile', compact('user'));
    }//end of function


    public function AdminEditProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.profile.edit', compact('user'));
    }//end of function

    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
    	$data->name = $request->name;
    	$data->email = $request->email;

    	if ($request->file('profile_photo_path')) {
    		$file = $request->file('profile_photo_path');
    		@unlink(public_path('uploads/user_images/'.$data->profile_photo_path));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/user_images'),$filename);
    		$data['profile_photo_path'] = $filename;
    	}
    	$data->save();

        $notification = array(
    		'message' => 'User Profile Updated Successfully',
    		'alert-type' => 'success'
    	);


    	return redirect()->route('admin.user.profile')->with($notification);
    }//end of function



    public function UserChangePassword(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view ('admin.password.change_password', compact('user'));
    }//end of function

    public function UserStorePassword(Request $request){
        $validateData = $request->validate([
    		'oldpassword' => 'required',
    		'password' => 'required|confirmed'

    	]);

    	$hashedPassword = Auth::user()->password;
    	if (Hash::check($request->oldpassword,$hashedPassword)) {
    		$user = User::find(Auth::id());
    		$user->password = Hash::make($request->password);
    		$user->save();
    		Auth::logout();
    		return redirect()->route('admin.logout');
    	}else{
    		return redirect()->back();
    	}

    }//end of function

	
}
