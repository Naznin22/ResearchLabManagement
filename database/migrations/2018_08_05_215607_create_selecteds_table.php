<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selecteds', function (Blueprint $table) {
            $table->increments('No');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('subject');
            $table->string('body'); 
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
        Schema::dropIfExists('selecteds');
    }
}
