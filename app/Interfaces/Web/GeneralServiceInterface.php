<?php

namespace App\Interfaces\Web;

Interface GeneralServiceInterface
{
    public function contactUs($request);

    public function saveList($request,$cats);

    public function search($request,$type);

    public function blogList();

    public function blogRand();

    public function userListing($uid);

    public function allListing($type);

    public function listingDetail($slug,$type);

    public function subCat($id);

    public function blogDetail($slug);

    public function mediaList();
}

?>