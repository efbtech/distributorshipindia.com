<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apr_queries', function (Blueprint $table) {
            $table->id();
            $table->string('type',255);
            $table->string('fname',255)->nullable();
            $table->string('lname',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('subject',255)->nullable();
            $table->text('message')->nullable();
            $table->string('is_replied',10)->nullable();
            $table->string('sent_attachments',255)->nullable();
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
        Schema::dropIfExists('apr_queries');
    }
}
