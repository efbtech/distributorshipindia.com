<?php

namespace App\Observers;
use App\Models\Admin\AdminCampaignsModel;


class CampaignObserver
{
    /**
     * Handle the AdminCampaignsModel "created" event.
     *
     * @param  \App\Models\AdminCampaignsModel  $AdminCampaignsModel
     * @return void
     */
    public function creating(AdminCampaignsModel $AdminCampaignsModel)
    {
        $AdminCampaignsModel->campaigns_slug = \Str::slug($AdminCampaignsModel->campaigns_title);
        // $AdminCampaignsModel->campaigns_title = $AdminCampaignsModel->campaigns_title;
    }
  
    /**
     * Handle the AdminCampaignsModel "created" event.
     *
     * @param  \App\Models\AdminCampaignsModel  $AdminCampaignsModel
     * @return void
     */
    public function created(AdminCampaignsModel $AdminCampaignsModel)
    {
        echo "anand"; die;
        // $AdminCampaignsModel->campaigns_title = $AdminCampaignsModel->campaigns_title;
        // $AdminCampaignsModel->save();
    }
  
    /**
     * Handle the AdminCampaignsModel "updated" event.
     *
     * @param  \App\Models\AdminCampaignsModel  $AdminCampaignsModel
     * @return void
     */
    public function updated(AdminCampaignsModel $AdminCampaignsModel)
    {
          
    }
  
    /**
     * Handle the AdminCampaignsModel "deleted" event.
     *
     * @param  \App\Models\AdminCampaignsModel  $AdminCampaignsModel
     * @return void
     */
    public function deleted(AdminCampaignsModel $AdminCampaignsModel)
    {
          
    }
  
    /**
     * Handle the AdminCampaignsModel "restored" event.
     *
     * @param  \App\Models\AdminCampaignsModel  $AdminCampaignsModel
     * @return void
     */
    public function restored(AdminCampaignsModel $AdminCampaignsModel)
    {
          
    }
  
    /**
     * Handle the AdminCampaignsModel "force deleted" event.
     *
     * @param  \App\Models\AdminCampaignsModel  $AdminCampaignsModel
     * @return void
     */
    public function forceDeleted(AdminCampaignsModel $AdminCampaignsModel)
    {
          
    }
}
