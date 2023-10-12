<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function onAllSelect(){
        $result = Footer::all();
        return $result;
    }

    public function PostContactDetails(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        date_default_timezone_set("Asia/Karachi");
        $contact_time = date('h:i:sa');
        $contact_date = date('d-m-Y');

        $result = Contact::insert([

            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_date' => $contact_date,
            'contact_time' => $contact_time,
        ]);

        return $result;
    }//end of method

    public function AllContact(){
        $footer = Footer::all();
    	return view('admin.footer.all_footer',compact('footer'));
    }

    public function EditContact($id){
    	$editData = Footer::findOrFail($id);
    	return view('admin.footer.edit_footer',compact('editData'));
    } // end mehtod 


    public function UpdateContact(Request $request){
    	$footer_id = $request->id;

        if ($request->file('footer_logo')) {
            $file = $request->file('footer_logo');
            @unlink(public_path('uploads/contact/'.$data->footer_logo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/contact'),$filename);
            $data['footer_logo'] = 'http://127.0.0.1:8000/uploads/contact/'. $filename;
        }

    	Footer::findOrFail($footer_id)->update([

    		'address' => $request->address,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'facebook' => $request->facebook,
            'instagram' => $request->instagram,
    		'linkedin' => $request->linkedin,
    		'twitter' => $request->twitter,
    		'footer_credit' => $request->footer_credit,
            'footer_text' => $request->footer_text,
            'footer_logo' => $data['footer_logo'],

    	]);

    	 $notification = array(
    		'message' => 'Footer Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.contact.content')->with($notification);

    } // end mehtod 

    public function DeleteContact($id){
        Footer::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Footer Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//end of method
}
