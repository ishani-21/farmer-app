<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPrivacyHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_privacy_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('raw_user_id')->nullable();
            $table->string('raw_image')->nullable();
            $table->string('raw_title')->nullable();
            $table->longText('raw_description')->nullable();
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
        Schema::dropIfExists('tbl_privacy_history');
    }
}
