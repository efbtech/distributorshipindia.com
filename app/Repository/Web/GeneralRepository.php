<?php

namespace App\Repository\Web;

use App\Models\Web\QueryModel;
use App\Models\Category;
use App\Models\Distributor;
use App\Models\listing_cat;
use App\Models\Admin\AdminMediaModel;
use App\Interfaces\Web\GeneralInterface;
use Carbon\Carbon;

class GeneralRepository implements GeneralInterface
{
    public function contactUs($request) {
        QueryModel::create($request);
    }

    public function saveList($request,$cats) {
        $listing = Distributor::create($request);
        foreach($cats as $c) {
            listing_cat::create(['listing_id'=>$listing->id, 'category_id'=>$c]);
        }
    }

    public function blogList() {
        $blogs = AdminBlogModel::select('*')
        ->where('is_featured','0')
        ->orderBy('created_at', 'desc')
        ->where('scheduled_date','<=',Carbon::now()->format('Y-m-d'))
        ->paginate(6);
        $featuredBlog = AdminBlogModel::where('is_featured','1')
        ->select('*')
        ->where('scheduled_date','<=',Carbon::now()
        ->format('Y-m-d'))
        ->first();
        return ['blogs' => $blogs, 'featuredBlog' => $featuredBlog];
    }

    public function blogRand() {
        $cat = Category::where('parent_id','=',NULL)->orderBy('id', 'asc')->get();
        return ['cats'=>$cat, 'firstsubcat'=>Category::where('parent_id',$cat[0]->id)->get()];
    }

    public function subCat($id) {
        return Category::where('parent_id',$id)->get(['id','name']);
    }

    public function blogDetail($slug) {
        $blogrand = AdminBlogModel::inRandomOrder()->orderBy('id', 'desc')->take(3)->get();
        $detail = AdminBlogModel::select('*')->where('blog_slug',$slug)->first();
        return ['blogrand' => $blogrand, 'detail' => $detail];
    }

    public function mediaList() {
        $photos = AdminMediaModel::select('media_name','media_path')->where('media_type','image')->orderBy('id', 'desc')->paginate(6, ['*'], 'mediaphotos');
        $videos = AdminMediaModel::select('media_name','media_thumb','media_path')->where('media_type','video')->orderBy('id', 'desc')->paginate(6, ['*'], 'mediavideos');
        $news = AdminMediaModel::select('media_name','media_path','media_news','media_meta_desc','media_slug')->where('media_type','news')->orderBy('id', 'desc')->paginate(6, ['*'], 'medianews');
        return ['photos' => $photos, 'videos' => $videos, 'news' => $news];
    }
}
?>