<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\MediaInterface;
use App\Interfaces\Admin\MediaServiceInterface;


class MediaServices implements MediaServiceInterface
{
    private $MediaInterface;

    public function __construct(MediaInterface $MediaInterface) 
    {
        $this->MediaInterface = $MediaInterface;
    }

    public function photoList($search)
    {
        return $this->MediaInterface->photoList($search);
    }

    public function videoList($search)
    {
        return $this->MediaInterface->videoList($search);
    }
    
    public function photoUpload($request)
    {
        $this->MediaInterface->photoUpload($request);
    }

    public function photoUploadEdit($request,$id) 
    {
        $this->MediaInterface->photoUploadEdit($request,$id);
    }

    public function videoUpload($request)
    {
        $this->MediaInterface->videoUpload($request);
    }

    public function videoUploadEdit($request,$id) 
    {
        $this->MediaInterface->videoUploadEdit($request,$id);
    }

    public function singleRecord($id)
    {
        return $this->MediaInterface->singleRecord($id);
    }

    public function mediaNewsStore($request)
    {
        $this->MediaInterface->mediaNewsStore($request);
    }

    public function newsList($search)
    {
        return $this->MediaInterface->newsList($search);
    }

    public function mediaNewsEdit($request,$id)
    {
        $this->MediaInterface->mediaNewsEdit($request,$id);
    }
}
?>