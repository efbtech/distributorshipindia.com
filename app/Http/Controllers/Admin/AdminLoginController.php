<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\LoginServiceInterface;


class AdminLoginController extends Controller
{
    private $LoginServiceInterface;

    public function __construct(LoginServiceInterface $LoginServiceInterface) {
        $this->LoginServiceInterface = $LoginServiceInterface;
    }
    
    public function loginScreen(Request $request) {
        if($request->session()->has('ADMIN_ID')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.login');
        }
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{6,}$/'
        ]);
        $response = $this->LoginServiceInterface->login($request->all());
        switch ($response) {
            case 'success':
                $result = redirect('admin/dashboard');
                break;
            case 'passerr':
                $result = redirect('admin')->withErrors(["password"=>"Invalid Password"])->withInput();
                break;
            case 'deactivated':
                $result = redirect('admin')->withErrors(["err_msg"=>"Your Account Is Deactivated"])->withInput();
                break;
            case 'invalidmail':
                $result = redirect('admin')->withErrors(["email"=>"Invalid Email Id"])->withInput();
                break;
            }
        return $result;

        /*
        |--------------------------------------------------------------------------
        | match function required php 8, it's a best alternative of switch
        |--------------------------------------------------------------------------
        |
        |
        */
        // $result = match($response) {
        //     'success' => redirect('admin/dashboard'),
        //     'passerr' => redirect('admin')->withErrors(["password"=>"Invalid Password"])->withInput(),
        //     'deactivated' => redirect('admin')->withErrors(["err_msg"=>"Your Account Is Deactivated"])->withInput(),
        //     'invalidmail' => redirect('admin')->withErrors(["email"=>"Invalid Email Id"])->withInput()
        // };
        // return $result;
    }

    public function logout(Request $request) {
        $request->session()->forget('ADMIN_ID'); 
        $request->session()->forget('USER_ID'); 
        $request->session()->forget('USER_TYPE');
        return redirect('admin');
    }
}