<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchiseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('logo',255);
            $table->integer('user_id');
            $table->enum('mode', array('appoint', 'become'))->default('appoint');
            $table->string('brand',255);
            $table->string('establishment',50);
            $table->integer('total_companies')->nullable();
            $table->integer('total_franchisee')->nullable();
            $table->string('space',100);
            $table->string('product_keywords',100);
            $table->string('fr_partner',50)->nullable();
            $table->string('investment_amt',50);
            $table->string('investment_unit',50);
            $table->enum('fee', array('1', '0'))->default('0');
            $table->enum('equip', array('1', '0'))->default('0');
            $table->enum('furn', array('1', '0'))->default('0');
            $table->enum('advert', array('1', '0'))->default('0');
            $table->enum('training_program', array('1', '0'))->default('0');
            $table->enum('softsupport', array('1', '0'))->default('0');
            $table->enum('is_renew', array('1', '0'))->default('0');
            $table->text('business_profile')->nullable();
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
        Schema::dropIfExists('franchisees');
    }
}
