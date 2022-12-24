<?php

namespace App\Interfaces\Admin;

Interface CampaignsServiceInterface
{
    public function listing($search,$type);

    public function listingStore($request,$type);

    public function listingEdit($request,$id,$type);

    public function listingStatus($id,$type);

    public function listingDelete($id,$type);

    public function listingDetail($id,$type);

    public function listingInbox($uid,$type);
}
?>