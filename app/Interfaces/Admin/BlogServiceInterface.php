<?php

namespace App\Interfaces\Admin;

Interface BlogServiceInterface
{
    public function blogStore($request);

    public function blogList($search);

    public function blogEdit($id);

    public function blogUpdate($request,$id);

    public function blogDetail($id);

    public function blogDelete($id);
}

?>