<?php

namespace App\Repository\Admin;

use App\Interfaces\Admin\SubscriptionInterface;
use Illuminate\Support\Facades\DB;

class SubscriptionRepository implements SubscriptionInterface
{
    public function subscriptionList() {
        return DB::table('users')->paginate(50);
    }

    public function uList($t) {
        return DB::table('users')->where('intrested',$t)->paginate(50);
    }

    public function listing($t) {
        if($t == 0){
            return DB::table('distributors')->select('distributors.*','users.name as username')->leftJoin('users','users.id','=','distributors.user_id')->paginate(50);
        }
        if($t == 1){
            return DB::table('franchisees')->select('franchisees.*','users.name as username')->leftJoin('users','users.id','=','franchisees.user_id')->paginate(50);
        }
        if($t == 2){
            return DB::table('salesagents')->select('salesagents.*','users.name as username')->leftJoin('users','users.id','=','salesagents.user_id')->paginate(50);
        }
    }

    public function counters() {
        $data = [];
        $data['list']['distributors'] = DB::table('distributors')->total();
        $data['list']['franchisees'] = DB::table('franchisees')->total();
        $data['list']['salesagents'] = DB::table('salesagents')->total();
        $data['users']['distributors'] = DB::table('users')->where('intrested',0)->total();
        $data['users']['franchisees'] = DB::table('users')->where('intrested',1)->total();
        $data['users']['salesagents'] = DB::table('users')->where('intrested',2)->total();
        return $data;
    }
}
?>