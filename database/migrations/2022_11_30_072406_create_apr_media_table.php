<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apr_media', function (Blueprint $table) {
            $table->id();
            $table->string('media_name',255);
            $table->string('media_type',20);
            $table->string('media_thumb',255)->nullable();
            $table->string('media_path',300);
            $table->text('media_news')->nullable();
            $table->text('media_meta_desc')->nullable();
            $table->string('media_slug',500)->nullable();
            $table->enum('status', array('0', '1'))->default('1');
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
        Schema::dropIfExists('apr_media');
    }
}