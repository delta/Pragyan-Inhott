<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->string('rollno');
            $table->string('name');
            $table->string('mobile');
            $table->string('hostel');
            $table->string('electrolution');
            $table->string('funda');
            $table->string('huntthecode');
            $table->string('picktoplace');
            $table->string('speedcubing');
            $table->string('theultimatemanager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registrations');
    }
}
