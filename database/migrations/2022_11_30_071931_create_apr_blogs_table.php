<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apr_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title',255);
            $table->string('blog_slug',500);
            $table->string('blog_image',500);
            $table->text('meta_desc');
            $table->text('blog_description');
            $table->date('scheduled_date');
            $table->enum('status', array('0', '1'))->default('1');
            $table->enum('is_featured', array('0', '1'))->default('0');
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
        Schema::dropIfExists('apr_blogs');
    }
}
