<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStartEndDateTimeInCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apr_campaigns', function (Blueprint $table) {
            $table->string('campaign_start_date', 255)->after('campaigns_amount');
            $table->string('campaign_start_time', 255)->after('campaign_start_date');
            $table->string('campaign_end_date', 255)->after('campaign_start_time');
            $table->string('campaign_end_time', 255)->after('campaign_end_date');
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