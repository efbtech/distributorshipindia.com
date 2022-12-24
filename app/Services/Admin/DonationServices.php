<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\DonationInterface;
use App\Interfaces\Admin\DonationServiceInterface;


class DonationServices implements DonationServiceInterface
{
    private $DonationInterface;

    public function __construct(DonationInterface $DonationInterface) 
    {
        $this->DonationInterface = $DonationInterface;
    }

    public function donationList()
    {
        return $this->DonationInterface->donationList();
    }
    
}
?>