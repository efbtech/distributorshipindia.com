<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->enum('mode', array('appoint', 'become'))->default('appoint');
            $table->string('gst',255);
            $table->string('pan',255);
            $table->string('brand',255);
            $table->string('establishment',50);
            $table->string('anualsale_start',50);
            $table->string('anualsale_end',50);
            $table->string('anualsale_unit',50);
            $table->integer('total_distributors')->nullable();
            $table->string('space',100);
            $table->string('logo',255);
            $table->integer('category_id')->nullable();
            $table->string('address',100);
            $table->string('city',100);
            $table->string('state',100);
            $table->string('zip',100);
            $table->text('about')->nullable();
            $table->text('products')->nullable();
            $table->string('meta_title',500);
            $table->text('meta_desc');
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
        Schema::dropIfExists('distributors');
    }
}
