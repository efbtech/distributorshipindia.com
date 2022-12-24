<?php

namespace App\Repository\Admin;

use App\Interfaces\Admin\CampaignsInterface;
use App\Services\Images\ImageServices;
use App\Models\Admin\AdminCampaignsModel;
use Illuminate\Support\Str;
use Carbon\Carbon;


class CampaignsRepository implements CampaignsInterface
{
    private $imageService;
    
    public function __construct(ImageServices $imageService ) {
        $this->imageService = $imageService;
    }

    /*
    |--------------------------------------------------------------------------
    | Helper functions
    |--------------------------------------------------------------------------
    |
    | convert date convert the formet of date
    | time diff return the differnce between two time in hours and minutes
    |
    */
    public function convertDate($reqDate,$format) {
        $date = str_replace('/', '-', $reqDate);
        return date($format, strtotime($date));
    }

    public function timeDiff($request) {
        $startTime = $request['campaigns_start_time'];
        $expStart = explode(' ', $startTime);
        
        $shrs = $expStart['0'];
        $smin = $expStart['2'];
        if ($expStart['3'] == 'PM') {
            $shrs += 12;
        }
        
        $endTime = $request['campaigns_end_time'];
        $expEnd = explode(' ', $endTime);
        $ehrs = $expEnd['0'];
        $emin = $expEnd['2'];
        if ($expEnd['3'] == 'PM') {
            $ehrs += 12;
        }
        
        $diffHrs = $ehrs - $shrs;
        $diffMin = $emin - $smin;
        return ['diffHrs' => $diffHrs, 'diffMin' => $diffMin];
    }

    /*
    |--------------------------------------------------------------------------
    | Create new campaign
    |--------------------------------------------------------------------------
    */
    public function listingStore($request,$type) {
        $campaign = new AdminCampaignsModel;
        $campaign->campaigns_title = $request['campaigns_title'];
        $campaign->campaigns_slug = Str::slug($request['campaigns_title']);
        $campaign->campaigns_meta_desc = $request['campaigns_meta_desc'];
        $campaign->campaigns_desc = $request['campaigns_desc'];
        $campaigns_feat_img = $request['campaigns_feat_img'];
        $imageUploadPath = 'assets/admin/images/campaigns/feat';
        $newImageName = str_replace(' ', '_', $request['campaigns_title']);
        $uploadedImageName = $this->imageService->uploadImageAdmin($campaigns_feat_img,$imageUploadPath,$newImageName);
        $uploadedImageCampaignsFeatImg = $imageUploadPath.'/'.$uploadedImageName;
        $campaign->campaigns_feat_img = $uploadedImageCampaignsFeatImg;
        $campaigns_detail_img = $request['campaigns_detail_img'];
        $imageUploadPath = 'assets/admin/images/campaigns/detail';
        $newImageName = str_replace(' ', '_', $request['campaigns_title']);
        $uploadedImageName = $this->imageService->uploadImageAdmin($campaigns_detail_img,$imageUploadPath,$newImageName);
        $uploadedImageCampaignsDetailImg = $imageUploadPath.'/'.$uploadedImageName;
        $campaign->campaigns_detail_img = $uploadedImageCampaignsDetailImg;
        $campaign->campaigns_orgainsed_by = $request['campaigns_orgainsed_by'];
        $campaign->campaigns_amount = $request['campaigns_amount'];
        $campaign->campaigns_start_date = $request['campaigns_start_date'];
        $campaign->campaigns_end_date = $request['campaigns_end_date'];
        $campaign->campaigns_comment = $request['campaigns_comment'];
        $startDate = Carbon::createFromDate($request['campaigns_start_date']);
        $endDate = Carbon::createFromDate($request['campaigns_end_date']);
        $camp_duration = $endDate->diffInDays($startDate);
        $campaign->campaigns_duration = $camp_duration;
        $campaign->save();
    }

    /*
    |--------------------------------------------------------------------------
    | Update the campaign
    |--------------------------------------------------------------------------
    */
    public function listingEdit($request,$id,$type) {
        if (isset($request['campaigns_feat_img'])) {
            if ($request['campaigns_feat_img'] != '') {
                $campaigns_feat_img = $request['campaigns_feat_img'];
                $imageUploadPath = 'assets/admin/images/campaigns/feat';
                $newImageName = str_replace(' ', '_', $request['campaigns_title']);
                $uploadedImageName = $this->imageService->uploadImageAdmin($campaigns_feat_img,$imageUploadPath,$newImageName);
                $uploadedImageCampaignsFeatImg = $imageUploadPath.'/'.$uploadedImageName;
                $campaigns_feat_img = $uploadedImageCampaignsFeatImg;
            }
        } else {
            $existFeatImg = AdminCampaignsModel::where('id',$id)->select('campaigns_feat_img')->first();
            $campaigns_feat_img = $existFeatImg->campaigns_feat_img;
        }

        if (isset($request['campaigns_detail_img'])) {
            if ($request['campaigns_detail_img'] != '') {
                $campaigns_detail_img = $request['campaigns_detail_img'];
                $imageUploadPath = 'assets/admin/images/campaigns/feat';
                $newImageName = str_replace(' ', '_', $request['campaigns_title']);
                $uploadedImageName = $this->imageService->uploadImageAdmin($campaigns_detail_img,$imageUploadPath,$newImageName);
                $uploadedImageCampaignsDetailImg = $imageUploadPath.'/'.$uploadedImageName;
                $campaigns_detail_img = $uploadedImageCampaignsDetailImg;
            }
        } else {
            $existDetailImg = AdminCampaignsModel::where('id',$id)->select('campaigns_detail_img')->first();
            $campaigns_detail_img = $existDetailImg->campaigns_detail_img;
        }

        $startDate = Carbon::createFromDate($request['campaigns_start_date']);
        $endDate = Carbon::createFromDate($request['campaigns_end_date']);
        
        $campaignArr = Array(
            'campaigns_title' => $request['campaigns_title'],
            'campaigns_slug' => Str::slug($request['campaigns_title']),
            'campaigns_meta_desc' => $request['campaigns_meta_desc'],
            'campaigns_desc' => $request['campaigns_desc'],
            'campaigns_feat_img' => $campaigns_feat_img,
            'campaigns_detail_img' => $campaigns_detail_img,
            'campaigns_orgainsed_by' => $request['campaigns_orgainsed_by'],
            'campaigns_amount' => $request['campaigns_amount'],
            'campaigns_start_date' => $request['campaigns_start_date'],
            'campaigns_end_date' => $request['campaigns_end_date'],
            'campaigns_comment' => $request['campaigns_comment'],
            'campaigns_duration' => $endDate->diffInDays($startDate),
        );
        AdminCampaignsModel::where('id',$id)->update($campaignArr);
    }

    /*
    |--------------------------------------------------------------------------
    | Campaigns listing with search also working with web
    |--------------------------------------------------------------------------
    */
    public function listing($search,$type) {
        if ($search != '') {
            $campaigns = AdminCampaignsModel::select('id','campaigns_title','campaigns_start_date','campaigns_orgainsed_by','campaigns_amount','campaigns_duration','campaigns_comment','status')
            ->where('apr_campaigns.campaigns_title', 'like', '%'.$search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            $campaigns->appends(['search' => $search]);
        } else {
            $campaigns = AdminCampaignsModel::select('id','campaigns_title','campaigns_start_date','campaigns_orgainsed_by','campaigns_amount','campaigns_duration','campaigns_comment','status')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }

        if ($search == 'weblist') {
            $campaigns = AdminCampaignsModel::select('id','campaigns_title','campaigns_start_date','campaigns_orgainsed_by','campaigns_amount','campaigns_duration','campaigns_comment','status','campaigns_feat_img','campaigns_slug')
            ->orderBy('created_at', 'desc')
            ->where('status','1')
            ->paginate(9);
        }
        return $campaigns;
    }

    /*
    |--------------------------------------------------------------------------
    | Single Campaign detail working with slug for web and 3 random campaigns
    |--------------------------------------------------------------------------
    */
    public function listingDetail($id,$type) {
        switch ($type) {
            case 'admin':
                return AdminCampaignsModel::find($id);
                break;
            
            case 'web':
                return AdminCampaignsModel::where('campaigns_slug',$id)->first();
                break;
            
            case 'random':
                return AdminCampaignsModel::inRandomOrder()->orderBy('id', 'desc')->take(3)->get();
                break;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Update Campaign status
    |--------------------------------------------------------------------------
    */
    public function listingStatus($id,$type) {
        $getstatus = AdminCampaignsModel::select('status')->where('id',$id)->first();
        $currentStatus = $getstatus->status;
        if ($currentStatus == '1') {
            AdminCampaignsModel::where('id',$id)->update(array('status'=>'0'));
        } else {
            AdminCampaignsModel::where('id',$id)->update(array('status'=>'1'));
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Campaign
    |--------------------------------------------------------------------------
    */
    public function listingDelete($id,$type) {
        AdminCampaignsModel::where('id',$id)->delete();
    }

    public function listingInbox($uid,$type) {
        // Inbox Code here
    }
}
?>