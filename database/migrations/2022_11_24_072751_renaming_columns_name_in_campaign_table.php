<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamingColumnsNameInCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apr_campaigns', function (Blueprint $table) {
            $table->renameColumn('campaign_start_date', 'campaigns_start_date');
            $table->renameColumn('campaign_start_time', 'campaigns_start_time');
            $table->renameColumn('campaign_end_date', 'campaigns_end_date');
            $table->renameColumn('campaign_end_time', 'campaigns_end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apr_campaigns', function (Blueprint $table) {
            //
        });
    }
}
