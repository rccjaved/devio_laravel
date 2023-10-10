<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBack;
use Image;

class FeedBackController extends Controller
{
    public function SelectFeedBack(){
        $result = FeedBack::get();
        return $result;
    }//end of function

    public function AllFeedBack(){
        $feedback = FeedBack::latest()->get();
        return view('admin.feedback.all_feedback',compact('feedback'));
    } // end method 

    public function AddFeedBack(){
        return view('admin.feedback.add_feedback');
    }//end of function

    public function StoreFeedBack(Request $request){

        $data = new FeedBack();

        if ($request->file('circle_images')) {
    		$file = $request->file('circle_images');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/feedback'),$filename);
    		$data['circle_images'] = 'http://127.0.0.1:8000/uploads/feedback/'. $filename;
    	}

        $data->save();


    	 $notification = array(
    		'message' => 'Feedback Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.feed.content')->with($notification);

    } // end method 

    public function EditFeedBack($id){

        $editData = FeedBack::findOrFail($id);
        return view('admin.feedback.edit_feedback',compact('editData'));

    } // end method 

    public function UpdateFeedBack(Request $request){

        $feedback_id = $request->id;
        $data = FeedBack::findOrFail($feedback_id);


        if ($request->file('circle_images')) {
    		$file = $request->file('circle_images');
    		@unlink(public_path('uploads/feedback/'.$data->circle_images));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/feedback'),$filename);
    		$data['circle_images'] = 'http://127.0.0.1:8000/uploads/feedback/'. $filename;
    	}

        $data->update();


         $notification = array(
            'message' => 'FeedBack Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.feed.content')->with($notification);


    } // end method 


    public function DeleteFeedBack($id){

        FeedBack::findOrFail($id)->delete();

        $notification = array(
            'message' => 'FeedBack Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
