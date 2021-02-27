<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settingss', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('email');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('Instagram');
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
        Schema::dropIfExists('settingss');
    }
}