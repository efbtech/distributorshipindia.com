<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesagentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesagent', function (Blueprint $table) {
            $table->id();
            $table->text('business_profile')->nullable();
            $table->text('product_detail')->nullable();
            $table->text('target_customer')->nullable();
            $table->text('expected_work')->nullable();
            $table->text('client_needed')->nullable();
            $table->text('location')->nullable();
            $table->integer('user_id');
            $table->enum('mode', array('appoint', 'become'))->default('appoint');
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
        Schema::dropIfExists('salesagent');
    }
}
