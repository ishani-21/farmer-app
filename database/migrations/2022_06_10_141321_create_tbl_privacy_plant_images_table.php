<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPrivacyPlantImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_privacy_plant_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('raw_user_id')->nullable();
            $table->string('raw_image')->nullable();
            $table->longText('raw_description')->nullable();
            $table->enum('raw_status',['0','1'])->comment("0 - Active, 1 - Deactive")->default(0);
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
        Schema::dropIfExists('tbl_privacy_plant_images');
    }
}
