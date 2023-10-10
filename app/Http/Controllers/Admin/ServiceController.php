<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePage;
use Image;

class ServiceController extends Controller
{
    public function SelectServiceName(){
        $result = ServicePage::all();
        return $result;
    }//end of function

    public function SelectServiceDetails(){
        $result = ServicePage::select('service_page_heading_one', 'service_page_para_one', 'service_page_image_one',
                                    'service_page_heading_two', 'service_page_para_two','service_page_image_two')->get();
        return $result;
    }//end of function

    public function onSelectDetails($serviceId){
        $id = $serviceId;
        $result = ServicePage::where('id', $id)->get();
        return $result;
    }//end of function

    public function AllServiceContent(){
        $servicecontent = ServicePage::latest()->get();
        return view('admin.servicecontent.all_service',compact('servicecontent'));
    } // end method 

    public function AddServiceContent(){
        return view('admin.servicecontent.add_service');
    }//end of function

    public function StoreServiceContent(Request $request){

    	$request->validate([
    		'service_name' => 'required',
    	],[
			'service_name.required' => 'Input Service Name',
    	]);

        $data = new ServicePage();
        $data->service_name = $request->service_name;
        $data->icon = $request->icon;
        $data->service_url = $request->service_url;
        $data->service_page_heading_one = $request->service_page_heading_one;
        $data->service_page_heading_two = $request->service_page_heading_two;
        $data->service_page_para_one = $request->service_page_para_one;
        $data->service_page_para_two = $request->service_page_para_two;

        if ($request->file('service_page_image_one')) {
    		$file = $request->file('service_page_image_one');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/service'),$filename);
    		$data['service_page_image_one'] = $filename;
    	}

        if ($request->file('service_page_image_two')) {
    		$file = $request->file('service_page_image_two');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/service'),$filename);
    		$data['service_page_image_two'] = $filename;
    	}

        $data->save();


    	 $notification = array(
    		'message' => 'Service Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.service.content')->with($notification);

    } // end method 

    public function EditServiceContent($id){

        $editData = ServicePage::findOrFail($id);
        return view('admin.servicecontent.edit_service',compact('editData'));

    } // end method 

    public function UpdateServiceContent(Request $request){

        $service_id = $request->id;
        $data = ServicePage::findOrFail($service_id);
        $data->service_name = $request->service_name;
        $data->icon = $request->icon;
        $data->service_url = $request->service_url;
        $data->service_page_heading_one = $request->service_page_heading_one;
        $data->service_page_heading_two = $request->service_page_heading_two;
        $data->service_page_para_one = $request->service_page_para_one;
        $data->service_page_para_two = $request->service_page_para_two;

        if ($request->file('service_page_image_one')) {
    		$file = $request->file('service_page_image_one');
    		@unlink(public_path('uploads/service/'.$data->service_page_image_one));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/service'),$filename);
    		$data['service_page_image_one'] = $filename;
    	}

        if ($request->file('service_page_image_two')) {
    		$file = $request->file('service_page_image_two');
    		@unlink(public_path('uploads/service/'.$data->service_page_image_two));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/service'),$filename);
    		$data['service_page_image_two'] = $filename;
    	}

        $data->save();


         $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.service.content')->with($notification);


    } // end method 


    public function DeleteServiceContent($id){

        ServicePage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
