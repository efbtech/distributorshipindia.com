<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\CMSInterface;
use App\Interfaces\Admin\CMSServiceInterface;


class CMSServices implements CMSServiceInterface
{
    private $CMSInterface;

    public function __construct(CMSInterface $CMSInterface) 
    {
        $this->CMSInterface = $CMSInterface;
    }

    public function getContent($type)
    {
        return $this->CMSInterface->getContent($type);
    }
    
    public function storeContent($request,$type)
    {
        $this->CMSInterface->storeContent($request,$type);
    }

}
?>