<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\SubscriptionInterface;
use App\Interfaces\Admin\SubscriptionServiceInterface;


class SubscriptionServices implements SubscriptionServiceInterface
{
    private $SubscriptionInterface;

    public function __construct(SubscriptionInterface $SubscriptionInterface) 
    {
        $this->SubscriptionInterface = $SubscriptionInterface;
    }

    public function subscriptionList()
    {
        return $this->SubscriptionInterface->subscriptionList();
    }
}
?>