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
            $table->string('scsc');
            $table->string('fundamental');
            $table->string('icudk');
            $table->string('codegolf');
            $table->string('hybridhackathon');
            // $table->string('theultimatemanager');
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
