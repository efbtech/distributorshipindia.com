<?php

namespace App\Interfaces\Web;

Interface GeneralServiceInterface
{
    public function contactUs($request);

    public function saveList($request,$cats);

    public function saveImage($request);

    public function getListingCats($listing_id, $type);

    public function search($request,$type);

    public function blogList();

    public function blogRand();

    public function userListing($uid);

    public function gallery($type,$listing_id);

    public function allListing($type);

    public function listingDetail($slug,$type);

    public function subCat($id);

    public function blogDetail($slug);

    public function mediaList();
}

?>