<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class ProjectController extends Controller
{
    public function SelectProjectData(){
        $result = Portfolio::get();
        return $result;
    }//end of function

    public function AllProjectContent(){
        $projectcontent = Portfolio::latest()->get();
        return view('admin.projectcontent.all_projects',compact('projectcontent'));
    } // end method 

    public function EditProjectContent($id){

        $editData = Portfolio::findOrFail($id);
        return view('admin.projectcontent.edit_projects',compact('editData'));

    } // end method 

    public function UpdateProjectContent(Request $request){

        $project_id = $request->id;
        $data = Portfolio::findOrFail($project_id);
        $data->portfolio_title = $request->portfolio_title;
        $data->portfolio_subtitle = $request->portfolio_subtitle;
        $data->description = $request->description;
        $data->button_text	 = $request->button_text;
        $data->button_url = $request->button_url;
        $data->image1_url = $request->image1_url;
        $data->image2_url = $request->image2_url;
        $data->image3_url = $request->image3_url;
        $data->image4_url = $request->image4_url;
        $data->image5_url = $request->image5_url;
        $data->image6_url = $request->image6_url;
        $data->image7_url = $request->image7_url;
        $data->image8_url = $request->image8_url;

        if ($request->file('image1')) {
    		$file = $request->file('image1');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image1'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image2')) {
    		$file = $request->file('image2');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image2'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image3')) {
    		$file = $request->file('image3');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image3'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image4')) {
    		$file = $request->file('image4');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image4'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image5')) {
    		$file = $request->file('image5');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image5'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image6')) {
    		$file = $request->file('image6');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image6'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image7')) {
    		$file = $request->file('image7');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image7'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        if ($request->file('image8')) {
    		$file = $request->file('image8');
    		@unlink(public_path('uploads/project/'.$data->image1));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/project'),$filename);
    		$data['image8'] = 'http://127.0.0.1:8000/uploads/project/'. $filename;
    	}

        
        $data->save();


         $notification = array(
            'message' => 'Project Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.project.content')->with($notification);


    } // end method 


    public function DeleteProjectContent($id){

        Portfolio::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Projects Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
