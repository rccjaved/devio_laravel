<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function SelectAbout(){
        $result = AboutPage::select('about_title', 'about_subtitle','video_url','button_text','button_url','description','bold_description')->get();
        return $result;
    }//end of function

    public function AllAboutContent(){
        $aboutcontent = AboutPage::all();
        return view('admin.aboutcontent.all_aboutcontent',compact('aboutcontent'));
    } // end method 
    

    public function EditAboutContent($id){

        $editaboutcontent = AboutPage::findOrFail($id);
        return view('admin.aboutcontent.edit_aboutcontent',compact('editaboutcontent'));

    } // end method 

    public function UpdateAboutContent(Request $request){

        $about_id = $request->id;

        AboutPage::findOrFail($about_id)->update([
            'about_title' => $request->about_title,
            'about_subtitle' => $request->about_subtitle,
            'description' => $request->description,
            'bold_description' => $request->bold_description,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'video_url' => $request->video_url,
            'about_image' => $request->about_image,
            'image_heading' => $request->image_heading, 

        ]);

         $notification = array(
            'message' => 'About Content Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.about.content')->with($notification);


    } // end method 


    public function DeleteAboutContent($id){

        AboutPage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'About Content Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
