<?php

namespace App\Repository\Admin;
use App\Interfaces\Admin\LoginInterface;
use App\Models\Admin\AdminModel;
use Session;

class LoginRepository implements LoginInterface
{
    public function login($request) {
        $result = AdminModel::where('email',$request['email'])->first();
        if(isset($result->id)) {
            if(md5($request['password']) !== $result->password) {
                return $res = 'passerr';
            } else {
                if($result->status == 1) {
                    Session::put('ADMIN_ID', $result->id);
                    Session::put('ADMIN_NAME', $result->name);
                    Session::put('USER_ID', $result->id);
                    Session::put('USER_TYPE','admin');
                    return $res = 'success';
				} else {
                    return $res = 'deactivated';
                }
			}
        } else {
            return $res = 'invalidmail';
        }
    }
}
?>