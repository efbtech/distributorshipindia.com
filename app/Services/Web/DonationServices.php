<?php

namespace App\Services\Web;
use App\Interfaces\Web\DonationInterface;
use App\Interfaces\Web\DonationServiceInterface;


class DonationServices implements DonationServiceInterface
{
    private $DonationInterface;

    public function __construct(DonationInterface $DonationInterface) 
    {
        $this->DonationInterface = $DonationInterface;
    }

    public function donationPayment($request)
    {
        return $this->DonationInterface->donationPayment($request);
    }

    public function donationPaymentMonthly($request)
    {
        return $this->DonationInterface->donationPaymentMonthly($request);
    }

    public function donationPaymentSuccess($request)
    {
        return $this->DonationInterface->donationPaymentSuccess($request);
    }

    
}
?>