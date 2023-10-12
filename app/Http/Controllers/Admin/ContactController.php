<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function PostContactDetails(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        

        $result = Contact::insert([

            'name' => $name,
            'email' => $email,
            'message' => $message,
    
        ]);

        return $result;
    }//end of method

    public function AllContactMessage(){
        $contact = Contact::all();
      return view('admin.contact.all_contact',compact('contact'));
    } // end method 

    public function DeleteContactMessage($id){

        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Message Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod 

    public function ContactForm(){
        $contact_form = Contact::latest()->get();
        return view('admin.contact.contact_form', compact('contact_form'));
    }//end of method

    public function DeleteContactForm($id){
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Data Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//end of function
}
