<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->renameColumn('elemental', 'icudk');
            $table->renameColumn('bytecode', 'backstabber');
            $table->renameColumn('bridgebrigadier', 'reversecoding');
            $table->renameColumn('waterrocket', 'fundamental');
            $table->renameColumn('theultimatemanager', 'dribbletrouble');
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
