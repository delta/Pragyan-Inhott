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
            $table->string('lineFollower');
            $table->string('pragyanDesignChallenge');
            $table->string('greenTech');
            $table->string('electrolution');
            $table->string('huntTheCode');
            $table->string('theUltimateManager');
            $table->string('waterRocket');
            $table->string('sanrachana');
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
