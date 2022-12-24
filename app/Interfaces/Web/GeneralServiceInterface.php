<?php

namespace App\Interfaces\Web;

Interface GeneralServiceInterface
{
    public function contactUs($request);

    public function saveList($request,$cats);

    public function blogList();

    public function blogRand();

    public function subCat($id);

    public function blogDetail($slug);

    public function mediaList();
}

?>