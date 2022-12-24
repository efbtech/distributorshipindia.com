<?php

namespace App\Interfaces\Web;

Interface DonationServiceInterface
{
    public function donationPayment($request);

    public function donationPaymentMonthly($request);

    public function donationPaymentSuccess($request);
}

?>