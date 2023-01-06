<?php

namespace App\Services\Web;
use App\Interfaces\Web\GeneralInterface;
use App\Interfaces\Web\GeneralServiceInterface;


class GeneralServices implements GeneralServiceInterface
{
    private $GeneralInterface;

    public function __construct(GeneralInterface $GeneralInterface) 
    {
        $this->GeneralInterface = $GeneralInterface;
    }

    public function contactUs($request)
    {
        $this->GeneralInterface->contactUs($request);
    }

    public function saveList($request,$cats)
    {
        $this->GeneralInterface->saveList($request,$cats);
    }

    public function saveImage($request) {
        $this->GeneralInterface->saveImage($request);
    }

    public function getListingCats($listing_id, $type) {
        return $this->GeneralInterface->getListingCats($listing_id, $type);
    }

    public function search($request,$type)
    {
        return $this->GeneralInterface->search($request,$type);
    }

    public function blogList()
    {
        return $this->GeneralInterface->blogList();
    }

    public function blogRand()
    {
        return $this->GeneralInterface->blogRand();
    }

    public function userListing($uid) {
        return $this->GeneralInterface->userListing($uid);
    }

    public function gallery($uid,$type,$listing_id) {
        return $this->GeneralInterface->gallery($uid,$type,$listing_id);
    }

    public function allListing($type) {
        return $this->GeneralInterface->allListing($type);
    }

    public function listingDetail($slug,$type) {
        return $this->GeneralInterface->listingDetail($slug,$type);
    }

    public function subCat($id)
    {
        return $this->GeneralInterface->subCat($id);
    }

    public function blogDetail($slug)
    {
        return $this->GeneralInterface->blogDetail($slug);
    }

    public function mediaList()
    {
        return $this->GeneralInterface->mediaList();
    }
    

}
?>