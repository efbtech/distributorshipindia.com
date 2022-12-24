<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\CampaignsServiceInterface;
use Session;

class AdminCampaignsController extends Controller
{
    public function __construct(CampaignsServiceInterface $CampaignsServiceInterface) {
        $this->CampaignsServiceInterface = $CampaignsServiceInterface;
        $this->middleware('admin');
    }

    public function campaignsList(Request $request) {
        $campList = $this->CampaignsServiceInterface->campaignsList($request->search);
        return view('admin.campaigns-list',compact('campList'));
    }

    public function campaignAdd(Request $request) {
        return view('admin.campaign-add');
    }

    public function campaignEdit($id) {
        $campDetail = $this->CampaignsServiceInterface->campaignDetail($id,'admin');
        return view('admin.campaign-add',compact('campDetail'));
    }

    public function campaignStatus(Request $request) {
        $this->CampaignsServiceInterface->campaignStatus($request->id);
    }

    public function campaignDelete(Request $request) {
        $this->CampaignsServiceInterface->campaignDelete($request->id);
    }

    public function campaignStore(Request $request) {
        if ($request->edit_campaign != '') { //-- Edit validations
            $this->validate($request, [ 
                'campaigns_title' => 'required', 
                'campaigns_feat_img' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
                'campaigns_detail_img' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
                'campaigns_orgainsed_by' => 'required',
                'campaigns_amount' => 'required',
                'campaigns_start_date' => 'required',
                'campaigns_end_date' => 'required',
                'campaigns_comment' => 'required',
                'campaigns_meta_desc' => 'required',
                'campaigns_desc' => 'required'
            ],[ 
                'campaigns_title.required' => 'Campaign title is required',
                'campaigns_orgainsed_by.required' => 'Campaign Orgainser is required',
                'campaigns_amount.required' => 'Amount is required',
                'campaigns_start_date.required' => 'Campaign start date is required',
                'campaigns_end_date.required' => 'Campaign end date is required',
                'campaigns_comment.required' => 'Campaign comment is required',
                'campaigns_meta_desc.required' => 'Campaign meta description is required',
                'campaigns_desc.required' => 'Campaign description is required',
            ]);
            Session::flash('campsess','Campaign '.$request->campaigns_title.' is successfully updated!');
            $this->CampaignsServiceInterface->campaignEdit($request->all(),$request->edit_campaign);
        } else { //-- Add validations
            $this->validate($request, [ 
                'campaigns_title' => 'required', 
                'campaigns_feat_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                'campaigns_detail_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                'campaigns_orgainsed_by' => 'required',
                'campaigns_amount' => 'required',
                'campaigns_start_date' => 'required',
                'campaigns_end_date' => 'required',
                'campaigns_comment' => 'required',
                'campaigns_meta_desc' => 'required',
                'campaigns_desc' => 'required'
            ],[ 
                'campaigns_title.required' => 'Campaign title is required',
                'campaigns_feat_img.required' => 'Campaign feat image is required',
                'campaigns_detail_img.required' => 'Campaign detail image is required',
                'campaigns_orgainsed_by.required' => 'Campaign Orgainser is required',
                'campaigns_amount.required' => 'Amount is required',
                'campaigns_start_date.required' => 'Campaign start date is required',
                'campaigns_end_date.required' => 'Campaign end date is required',
                'campaigns_comment.required' => 'Campaign comment is required',
                'campaigns_meta_desc.required' => 'Campaign meta description is required',
                'campaigns_desc.required' => 'Campaign description is required',
            ]);
            Session::flash('campsess','New Campaign '.$request->campaigns_title.' is successfully added!');
            $this->CampaignsServiceInterface->campaignStore($request->all());
        }
        return redirect('admin/campaigns-list');
    }
}