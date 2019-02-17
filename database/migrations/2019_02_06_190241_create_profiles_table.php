<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id');
            // $table->string('name');
            $table->string('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('file')->nullable();
            $table->string('website')->nullable();
            $table->longText('address')->nullable();
            // $table->longText('education');
            $table->longText('profession')->nullable();
            $table->longText('personal_experience')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
