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

    public function userList($type=NULL) {
        if($type){
            if($type == 'distributors') {
                $t = 0;
            }
            if($type == 'franchises') {
                $t = 1;
            }
            if($type == 'agents') {
                $t = 2;
            }
            $subList = $this->SubscriptionServiceInterface->uList($t);
        } else {
            $subList = $this->SubscriptionServiceInterface->subscriptionList();
        }
        //dd($subList);
        return view('admin.subscription-list',compact('subList','type'));
    }

    public function listing($type=NULL) {
        if($type){
            if($type == 'distributors') {
                $t = 0;
            }
            if($type == 'franchises') {
                $t = 1;
            }
            if($type == 'agents') {
                $t = 2;
            }
            $subList = $this->SubscriptionServiceInterface->listing($t);
        } else {
            $subList = $this->SubscriptionServiceInterface->listing();
        }
        //dd($subList);
        return view('admin.listing-list',compact('subList','type'));
    }
}