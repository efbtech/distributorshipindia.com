<?php

namespace App\Interfaces\Admin;

Interface MediaServiceInterface
{
    public function photoList($search);

    public function videoList($search);
    
    public function photoUpload($request);

    public function photoUploadEdit($request,$id);

    public function videoUpload($request);

    public function videoUploadEdit($request,$id);

    public function singleRecord($id);

    public function mediaNewsStore($request);

    public function newsList($search);

    public function mediaNewsEdit($request,$id);
}
?>