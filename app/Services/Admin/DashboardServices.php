<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\DashboardInterface;
use App\Interfaces\Admin\DashboardServiceInterface;


class DashboardServices implements DashboardServiceInterface
{
    private $DashboardInterface;

    public function __construct(DashboardInterface $DashboardInterface) 
    {
        $this->DashboardInterface = $DashboardInterface;
    }

    
}
?>