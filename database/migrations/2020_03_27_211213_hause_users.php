<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HauseUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('first_last_name');

            $table->string('password');
            $table->string('username');
            $table->string('Email');

        });

        Schema::table('users', function ($table) {
            $table->string('api_token', 60)->after('password')
                ->unique()
                ->nullable()
                ->default(null);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');

    }


}
