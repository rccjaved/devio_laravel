<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Image;
use Auth;

class BlogController extends Controller
{
    public function SelectBlog(){
        $result = Blog::get();
        return $result;
    }//end of function

    public function BlogDetails($blogId){
        $id = $blogId;
        $result = Blog::where('id', $id)->get();
        return $result;
    }

    public function AllBlogs(){
        $blogs = Blog::latest()->get();
        return view('admin.blogs.all_blogs', compact('blogs'));
    } // end method 

    public function AddBlogs(){
        return view('admin.blogs.add_blogs');
    }//end of function

    public function StoreBlogs(Request $request){

        $data = new Blog();
        $data->blog_name = $request->blog_name;
        $data->blog_author = Auth::user()->name;
        $data->blog_description = $request->blog_description;
        $data->slug = $request->slug;
        $data->facebook_url = $request->facebook_url;
        $data->twitter_url = $request->twitter_url;
        $data->linkedin_url = $request->linkedin_url;

        if ($request->file('blog_image')) {
    		$file = $request->file('blog_image');
    		$filename = $file->getClientOriginalName();
    		$file->move(public_path('uploads/blogs'),$filename);
    		$data['blog_image'] = env('BLOG_URL').$filename;
    	}

        $data->save();


    	 $notification = array(
    		'message' => 'Blogs Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('admin.blog.view')->with($notification);

    } // end method 

    public function EditBlogs($id){

        $editData = Blog::findOrFail($id);
        return view('admin.blogs.edit_blogs',compact('editData'));

    } // end method 

    public function UpdateBlogs(Request $request){

        $blog_id = $request->id;
        $data = Blog::findOrFail($blog_id);
        $data->blog_name = $request->blog_name;
        $data->blog_description = $request->blog_description;
        $data->slug = $request->slug;
        $data->facebook_url = $request->facebook_url;
        $data->twitter_url = $request->twitter_url;
        $data->linkedin_url = $request->linkedin_url;

        if ($request->file('blog_image')) {
    		$file = $request->file('blog_image');
    		@unlink(public_path('uploads/blogs/'.$data->blog_image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('uploads/blogs'),$filename);
    		$data['blog_image'] = env('BLOG_URL') .$filename;
    	}

        $data->update();


         $notification = array(
            'message' => 'Blogs Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.blog.view')->with($notification);


    } // end method 


    public function DeleteBlogs($id){

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method 
}
