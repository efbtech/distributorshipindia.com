<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\SubscriptionServiceInterface;

class AdminUserController extends Controller
{
    public function __construct(SubscriptionServiceInterface $SubscriptionServiceInterface) {
        $this->SubscriptionServiceInterface = $SubscriptionServiceInterface;
        $this->middleware('admin');
    }

    public function userList() {
        $subList = $this->SubscriptionServiceInterface->subscriptionList();
        return view('admin.subscription-list',compact('subList'));
    }
}