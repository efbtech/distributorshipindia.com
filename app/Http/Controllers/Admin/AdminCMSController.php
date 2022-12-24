<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\CMSServiceInterface;
use Session;

class AdminCMSController extends Controller
{
    public function __construct(CMSServiceInterface $CMSServiceInterface) {
        $this->CMSServiceInterface = $CMSServiceInterface;
        $this->middleware('admin');
    }

    public function termsConditions() {
        $termscon = $this->CMSServiceInterface->getContent('terms-condition');
        return view('admin.terms-conditions',compact('termscon'));
    }

    public function termsConditionsStore(Request $request) {
        $this->CMSServiceInterface->storeContent($request->all(),'terms-condition');
        Session::flash('termscond','Terms and Conditions is successfully added!');
        return redirect('admin/terms-conditions');
    }

    public function privacyPolicy(Request $request) {
        $privacyPolicy = $this->CMSServiceInterface->getContent('privacy-policy');
        return view('admin.privacy-policy',compact('privacyPolicy'));
    }

    public function privacyPolicyStore(Request $request) {
        $this->CMSServiceInterface->storeContent($request->all(),'privacy-policy');
        Session::flash('privacyPolicy','Privacy Policy is successfully added!');
        return redirect('admin/privacy-policy');
    }
}