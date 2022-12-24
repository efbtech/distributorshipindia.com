<?php

namespace App\Repository\Admin;
use App\Interfaces\Admin\DonationInterface;
use App\Models\Web\DonationModel;

class DonationRepository implements DonationInterface
{
    public function donationList() {
        return DonationModel::select('amount','doner_name','donation_type','transaction_id')->where('donation_type','one-time')->paginate(10);
    }
}
?>