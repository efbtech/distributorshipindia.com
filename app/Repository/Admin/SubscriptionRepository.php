<?php

namespace App\Repository\Admin;

use App\Interfaces\Admin\SubscriptionInterface;
use Illuminate\Support\Facades\DB;

class SubscriptionRepository implements SubscriptionInterface
{
    public function subscriptionList() {
        return DB::table('users')->paginate(10);
    }
}
?>