<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\VolunteerInterface;
use App\Interfaces\Admin\VolunteerServiceInterface;


class VolunteerServices implements VolunteerServiceInterface
{
    private $VolunteerInterface;

    public function __construct(VolunteerInterface $VolunteerInterface) 
    {
        $this->VolunteerInterface = $VolunteerInterface;
    }

    public function volunteerList()
    {
        return $this->VolunteerInterface->volunteerList();
    }
}
?>