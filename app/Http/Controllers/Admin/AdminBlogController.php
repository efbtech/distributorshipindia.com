<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\BlogServiceInterface;
use Session;

class AdminBlogController extends Controller
{
    public function __construct(BlogServiceInterface $BlogServiceInterface) {
        $this->BlogServiceInterface = $BlogServiceInterface;
        $this->middleware('admin');
    }
    
    public function blogAdd() {
        return view('admin.blog-add');
    }

    public function blogEdit($id) {
        $blogEdit = $this->BlogServiceInterface->blogEdit($id);
        return view('admin.blog-add',compact('blogEdit'));
    }
    
    public function blogList(Request $request) {
        $blogs = $this->BlogServiceInterface->blogList($request->search);
        return view('admin.blog-list',compact('blogs'));
    }
    
    public function blogStore(Request $request) {
        if ($request->edit_blog != '') {
            $this->validate($request, [
                'blog_title' => 'required', 
                'scheduled_date' => 'required', 
                'meta_desc' => 'required',
                'blog_description' => 'required',
                'blog_image' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
            ],[
                'blog_title.required' => 'Blog Title field is required',
                'scheduled_date.required' => 'Scheduled Date field is required',
                'meta_desc.required' => 'Meta description is required',
                'blog_description.required' => 'Blog description is required'
            ]);
            Session::flash('blogsave','Blog '.$request->blog_title.' is successfully updated!');
            $this->BlogServiceInterface->blogUpdate($request->all(),$request->edit_blog);
        } else {
            $this->validate($request, [ 
                'blog_title' => 'required', 
                'scheduled_date' => 'required', 
                'meta_desc' => 'required',
                'blog_description' => 'required',
                'blog_image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
            ],[ 
                'blog_title.required' => 'Blog title is required',
                'scheduled_date.required' => 'Scheduled Date is required',
                'meta_desc.required' => 'Meta description is required',
                'blog_description.required' => 'Blog description is required',
                'blog_image.required' => 'Blog image is required'
            ]);
            Session::flash('blogsave','Blog '.$request->blog_title.' is successfully added!');
            $this->BlogServiceInterface->blogStore($request->all());
        }
        return redirect('admin/blog-list');
    }

    function blogDetail(Request $request) {
        return $this->BlogServiceInterface->blogDetail($request->id);
    }

    function blogDelete(Request $request) {
        $this->BlogServiceInterface->blogDelete($request->id);
    }
}