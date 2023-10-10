<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievements;
use Image;

class AchievementController extends Controller
{
    public function SelectAchievements(){
        $result = Achievements::get();
        return $result;
    }//end of function

    public function AllAchievements(){
        $achievements = Achievements::latest()->get();
        return view('admin.achievements.all_achievements',compact('achievements'));
    } // end method 

    public function AddAchievements(){
        return view('admin.achievements.add_achievements');
    }//end of function

    public function StoreAchievements(Request $request){

        $data = new Achievements();
        $data->image_url = $request->image_url;
    
        $image = $request->file('image'); 
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('uploads/achieve/'.$name_gen);
        $save_url = 'http://127.0.0.1:8000/uploads/achieve/'.$name_gen;

        $data->image = $save_url;

        $data->save();


    	 $notification = array(
    		'message' => 'Achievements Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.achieve.content')->with($notification);

    } // end method 

    public function EditAchievements($id){

        $editData = Achievements::findOrFail($id);
        return view('admin.achievements.edit_achievements',compact('editData'));

    } // end method 

    public function UpdateAchievements(Request $request){

        $achieve_id = $request->id;
        $data = Achievements::findOrFail($achieve_id);
        $data->image_url = $request->image_url;
 

        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('uploads/achieve/'.$data->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/achieve'),$filename);
    		$data['image'] = 'http://127.0.0.1:8000/uploads/achieve/'. $filename;
    	}

        $data->update();


         $notification = array(
            'message' => 'Achievements Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.achieve.content')->with($notification);


    } // end method 


    public function DeleteAchievements($id){

        Achievements::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Achievements Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
