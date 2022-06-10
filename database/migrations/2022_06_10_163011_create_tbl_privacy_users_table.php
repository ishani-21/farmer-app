<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPrivacyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_privacy_users', function (Blueprint $table) {
            $table->id();
            $table->string('raw_mobile')->nullable();
            $table->string('raw_name')->nullable();
            $table->string('raw_otp')->nullable();
            $table->enum('raw_status',['0','1'])->comment("0 - Active, 1 - Deactive")->default(0);
            $table->enum('raw_is_verify',['0','1'])->comment("0 - False, 1 - True")->default(0);
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
        Schema::dropIfExists('tbl_privacy_users');
    }
}
