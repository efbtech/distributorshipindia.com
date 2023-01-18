<?php

namespace App\Interfaces\Admin;

Interface SubscriptionServiceInterface
{
    public function subscriptionList();

    public function uList($t);

    public function listing($t);
}
?>