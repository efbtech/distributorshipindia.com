<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apr_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaigns_title', 255);
            $table->text('campaigns_meta_desc')->nullable();
            $table->text('campaigns_desc')->nullable();
            $table->string('campaigns_feat_img', 255)->nullable();
            $table->string('campaigns_detail_img', 255)->nullable();
            $table->date('campaigns_date')->nullable();
            $table->string('campaigns_orgainsed_by', 255)->nullable();
            $table->integer('campaigns_amount')->nullable();
            $table->string('campaigns_duration', 255)->nullable();
            $table->string('campaigns_comment', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apr_campaigns');
    }
}
