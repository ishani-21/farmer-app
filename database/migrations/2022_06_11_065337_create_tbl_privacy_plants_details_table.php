<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPrivacyPlantsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_privacy_plants_details', function (Blueprint $table) {
            $table->id();
            $table->string('raw_title')->nullable();
            $table->string('raw_description')->nullable();
            $table->string('raw_image')->nullable();
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
        Schema::dropIfExists('tbl_privacy_plants_details');
    }
}
