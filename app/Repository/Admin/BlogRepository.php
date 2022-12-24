<?php

namespace App\Repository\Admin;

use Illuminate\Support\Str;
use App\Models\Admin\AdminBlogModel;
use App\Interfaces\Admin\BlogInterface;
use App\Services\Images\ImageServices;

class BlogRepository implements BlogInterface
{
    private $imageService;
    
    public function __construct(ImageServices $imageService ) {
        $this->imageService = $imageService;
    }

    public function blogList($search) {
        if ($search != '') {
            $blogs = AdminBlogModel::select('*')->where('apr_blogs.blog_title', 'like', '%'.$search.'%')->orderBy('created_at', 'desc')->paginate(12);
            $blogs->appends(['search' => $search]);
        } else {
            $blogs = AdminBlogModel::select('*')->orderBy('created_at', 'desc')->paginate(12);
        }
        return $blogs;
    }

    public function blogStore($request) {
        $blog = new AdminBlogModel;
        $blog->blog_title = $request['blog_title'];
        $blog->meta_desc = $request['meta_desc'];
        $blog->blog_description = $request['blog_description'];
        $blog->scheduled_date = $request['scheduled_date'];
        $blog->blog_slug = Str::slug($request['blog_title']);
        $blog_image = $request['blog_image'];
        $imageUploadPath = 'assets/admin/images/blogs';
        $newImageName = str_replace(' ', '_', $request['blog_title']);
        $uploadedImageName = $this->imageService->uploadImageAdmin($blog_image,$imageUploadPath,$newImageName);
        $uploadedImagePathBlog = $imageUploadPath.'/'.$uploadedImageName;
        $blog->blog_image = $uploadedImagePathBlog;
        if (isset($request['is_featured'])) {
            if ($request['is_featured'] == 'on') {
                AdminBlogModel::where('is_featured','1')->update(['is_featured' => '0']);
                $blog->is_featured = '1';
            }
        }
        $blog->save();
    }

    public function blogEdit($id) {
        return AdminBlogModel::find($id);
    }

    public function blogUpdate($request,$id) {
        if (isset($request['blog_image'])) {
            if ($request['blog_image'] != '') {
                $blog_image = $request['blog_image'];
                $imageUploadPath = 'assets/admin/images/blogs';
                $newImageName = str_replace(' ', '_', $request['blog_title']);
                $uploadedImageName = $this->imageService->uploadImageAdmin($blog_image,$imageUploadPath,$newImageName);
                $uploadedImagePathBlog = $imageUploadPath.'/'.$uploadedImageName;
                $blog_image = $uploadedImagePathBlog;
            }
        } else {
            $existBlogImg = AdminBlogModel::where('id',$id)->select('blog_image')->first();
            $blog_image = $existBlogImg->blog_image;
        }
        $blogArr = Array(
            'blog_title' => $request['blog_title'],
            'meta_desc' => $request['meta_desc'],
            'blog_description' => $request['blog_description'],
            'scheduled_date' => $request['scheduled_date'],
            'blog_slug' => Str::slug($request['blog_title']),
            'blog_image' => $blog_image
        );
        if (isset($request['is_featured'])) {
            if ($request['is_featured'] == 'on') {
                AdminBlogModel::where('is_featured','1')->update(['is_featured' => '0']);
                AdminBlogModel::where('id',$id)->update(['is_featured' => '1']);
            }
        }
        AdminBlogModel::where('id',$id)->update($blogArr);
    }

    public function blogDetail($id) {
        return AdminBlogModel::where('id',$id)->first();
    }

    public function blogDelete($id) {
        AdminBlogModel::where('id',$id)->delete();
    }
}
?>