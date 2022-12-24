<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\CampaignsInterface;
use App\Interfaces\Admin\CampaignsServiceInterface;


class CampaignsServices implements CampaignsServiceInterface
{
    private $CampaignsInterface;

    public function __construct(CampaignsInterface $CampaignsInterface) 
    {
        $this->CampaignsInterface = $CampaignsInterface;
    }

    public function listing($search,$type)
    {
        return $this->CampaignsInterface->campaignsList($search);
    }

    public function listingStore($request,$type)
    {
        $this->CampaignsInterface->campaignStore($request);
    }

    public function listingEdit($request,$id,$type)
    {
        $this->CampaignsInterface->campaignEdit($request,$id);
    }

    public function listingDetail($id,$type)
    {
        return $this->CampaignsInterface->campaignDetail($id,$type);
    }

    public function listingStatus($id,$type)
    {
        $this->CampaignsInterface->campaignStatus($id);
    }

    public function listingDelete($id,$type) {
        $this->CampaignsInterface->campaignDelete($id);
    }

    public function listingInbox($uid,$type) {
        
    }
}
?>