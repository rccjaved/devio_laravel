<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageController extends Controller
{
    public function SelectHome(){
        $result = HomePage::select('total_projects', 'total_countries', 'total_workers', 'total_window_users')->get();
        return $result;
    }

    public function SelectHomeTitle(){
        $result = HomePage::select('home_title', 'home_subtitle','video_url','button_text','button_url')->get();
        return $result;
    }

    public function SelectHomeSocialIcons(){
        $result = HomePage::select('facebook_url', 'whatsapp_no','instagram_url','linkedin_url')->get();
        return $result;
    }//end of function

    public function AllHomeContent(){

        $homecontent = HomePage::all();
        return view('admin.homecontent.all_homecontent',compact('homecontent'));
    } // end method 

    public function EditHomeContent($id){

        $edithomecontent = HomePage::findOrFail($id);
        return view('admin.homecontent.edit_homecontent',compact('edithomecontent'));

    } // end method 

    public function UpdateHomeContent(Request $request){

        $home_id = $request->id;

        HomePage::findOrFail($home_id)->update([
            'home_title' => $request->home_title,
            'home_subtitle' => $request->home_subtitle,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'total_projects' => $request->total_projects,
            'total_countries' => $request->total_countries,
            'total_workers' => $request->total_workers,
            'total_window_users' => $request->total_window_users,
            'video_url' => $request->video_url, 
            'facebook_url' => $request->facebook_url,
            'whatsapp_no' => $request->whatsapp_no,
            'instagram_url' => $request->instagram_url,
            'linkedin_url' => $request->linkedin_url,

        ]);

         $notification = array(
            'message' => 'Home Content Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.home.content')->with($notification);


    } // end method 


    public function DeleteHomeContent($id){

        HomePage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Home Content Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
