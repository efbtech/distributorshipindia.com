<?php

namespace App\Interfaces\Admin;

Interface CMSServiceInterface
{
    public function getContent($type);
    
    public function storeContent($request,$type);
}
?>