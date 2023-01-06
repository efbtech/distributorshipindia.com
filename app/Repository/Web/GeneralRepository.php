<?php

namespace App\Repository\Web;

use App\Models\Web\QueryModel;
use App\Models\Category;
use App\Models\Distributor;
use App\Models\Franchise;
use App\Models\listing_cat;
use App\Services\Images\ImageServices;
use App\Interfaces\Web\GeneralInterface;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class GeneralRepository implements GeneralInterface
{
    private $imageService;
    
    public function __construct(ImageServices $imageService ) {
        $this->imageService = $imageService;
    }

    public function contactUs($request) {
        QueryModel::create($request);
    }

    public function search($request,$type) {
        if($type == 'distributor'){
            $data = Distributor::where('name','like','%'.$request['searchkeywords'].'%')->get();
            return $data;
        }
    }

    
    /*
    |--------------------------------------------------------------------------
    | Distributors abd categories save
    |--------------------------------------------------------------------------
    */
    public function saveImage($request) {
        if(Auth::user()->intrested == 0) {
                $mypost = Distributor::where('id',$request['id'])
                ->where('user_id',$request['user_id'])
                ->first(['gallery']);
                $gals = json_decode($mypost->gallery);
                $gals[] = $request['filename'];
                $dis = Distributor::find($request['id']);
                $dis->gallery = json_encode($gals);
                $dis->save();
        }
    }

    private function makeslug($a) {
        $slug = str_replace(' ','',$a);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
    }

    public function saveList($request,$cats) {
        //dd($request);
        if(isset($request['listing_type']) && $request['listing_type'] == 'franchise'){
            //dd($request);
            $logo = $request['logo'];
            $imageUploadPath = 'assets/uploads/franchise/logo';
            $newImageName = str_replace(' ', '_', $request['name'].time());
            $uploadedImageName = $this->imageService->uploadImageAdmin($logo,$imageUploadPath,$newImageName);
            $uploadedImagePathLogo = $imageUploadPath.'/'.$uploadedImageName;
            $listing = new Franchise;
            $listing->name = $request['name'];
            $listing->mode = $request['mode'];
            $listing->brand = $request['brand'];
            $listing->establishment = $request['establishment'];
            $listing->total_companies = $request['total_companies'];
            $listing->total_franchisee = $request['total_franchisee'];
            $listing->space = $request['space'];
            $listing->logo = $uploadedImagePathLogo;
            $listing->user_id = auth()->user()->id;
            $listing->product_keywords = $request['product_keywords'];
            $listing->fr_partner = $request['fr_partner'];
            $listing->investment_amt = $request['investment_amt'];
            $listing->investment_unit = $request['investment_unit'];
            $listing->fee = $request['fee'];
            $listing->equip = $request['equip'];
            $listing->furn = $request['furn'];
            $listing->advert = $request['advert'];
            $listing->training_program = $request['training_program'];
            $listing->softsupport = $request['softsupport'];
            $listing->is_renew = $request['is_renew'];
            $listing->business_profile = $request['business_profile'];
            $listing->meta_title = $request['meta_title'];
            $listing->meta_desc = $request['meta_desc'];
            $listing->status = 1;
            $listing->slug = $this->makeslug($request['name']);
            $listing->save();
            
            foreach($cats as $c) {
                $cat = new listing_cat;
                $cat->listing_id = $listing->id;
                $cat->category_id = $c;
                $cat->save();
            }
            
        }
        if(isset($request['listing_type']) && $request['listing_type'] == 'distributor'){
            $logo = $request['logo'];
            $imageUploadPath = 'assets/uploads/distributors/logo';
            $newImageName = str_replace(' ', '_', $request['name'].time());
            $uploadedImageName = $this->imageService->uploadImageAdmin($logo,$imageUploadPath,$newImageName);
            $uploadedImagePathLogo = $imageUploadPath.'/'.$uploadedImageName;
            $listing = new Distributor;
            $listing->name = $request['name'];
            $listing->user_id = auth()->user()->id;
            $listing->mode = $request['mode'];
            $listing->gst = $request['gst'];
            $listing->pan = $request['pan'];
            $listing->brand = $request['brand'];
            $listing->establishment = $request['establishment'];
            $listing->anualsale_start = $request['anualsale_start'];
            $listing->anualsale_end = $request['anualsale_end'];
            $listing->anualsale_unit = $request['anualsale_unit'];
            $listing->total_distributors = $request['total_distributors'];
            $listing->space = $request['space'];
            $listing->logo = $uploadedImagePathLogo;
            $listing->address = $request['address'];
            $listing->city = $request['city'];
            $listing->state = $request['state'];
            $listing->zip = $request['zip'];
            $listing->slug = $this->makeslug($request['name']);
            $listing->save();
            
            foreach($cats as $c) {
                $cat = new listing_cat;
                $cat->listing_id = $listing->id;
                $cat->category_id = $c;
                $cat->save();
            }
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

    public function userListing($uid) {
        $data = Distributor::where('user_id',$uid)->get();
        return $data;
    }

    public function gallery($uid,$type,$listing_id) {
        if($type == 0) {
            $data = Distributor::where('id',$listing_id)->first(['gallery','name']);
            return $data;
        }
    }

    public function allListing($type) {
        if($type == 'distributor') {
            $data = Distributor::orderBy('id', 'desc')->get();
        }
        if($type == 'franchise') {
            $data = Franchise::orderBy('id', 'desc')->get();
        }
        return $data;
    }

    public function listingDetail($slug,$type) {
        if($type == 'distributor') {
            $data = Distributor::where('slug',$slug)->first();
        }
        return $data;
    }

    public function getListingCats($listing_id, $type) {
        $cats = listing_cat::leftJoin('categories', 'categories.id', '=', 'listing_cat.category_id')->where('listing_id',$listing_id)->get(['categories.id','categories.name']);
        return $cats;
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