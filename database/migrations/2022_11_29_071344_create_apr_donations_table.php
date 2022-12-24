<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apr_donations', function (Blueprint $table) {
            $table->id();
            $table->string('type',50);
            $table->integer('amount');
            $table->string('donation_type',100);
            $table->string('doner_name',255)->nullable();
            $table->string('doner_email',255)->nullable();
            $table->string('transaction_id',255)->nullable();
            $table->string('payment_id',255)->nullable();
            $table->string('payment_status',30)->nullable();
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
        Schema::dropIfExists('apr_donations');
    }
}
