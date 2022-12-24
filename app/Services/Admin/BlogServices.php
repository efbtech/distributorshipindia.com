<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\BlogInterface;
use App\Interfaces\Admin\BlogServiceInterface;


class BlogServices implements BlogServiceInterface
{
    private $BlogInterface;

    public function __construct(BlogInterface $BlogInterface) 
    {
        $this->BlogInterface = $BlogInterface;
    }

    public function blogStore($request)
    {
        $this->BlogInterface->blogStore($request);
    }

    public function blogList($search)
    {
        return $this->BlogInterface->blogList($search);
    }

    public function blogEdit($id)
    {
        return $this->BlogInterface->blogEdit($id);
    }

    public function blogUpdate($request,$id)
    {
        $this->BlogInterface->blogUpdate($request,$id);
    }

    public function blogDetail($id)
    {
        return $this->BlogInterface->blogDetail($id);
    }

    public function blogDelete($id)
    {
        $this->BlogInterface->blogDelete($id);
    }
}
?>