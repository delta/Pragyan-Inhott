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
            $table->renameColumn('funda', 'elemental');
            $table->renameColumn('huntthecode', 'bytecode');
            $table->renameColumn('picktoplace', 'bridgebrigadier');
            $table->renameColumn('speedcubing', 'waterrocket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->renameColumn('elemental', 'funda');
            $table->renameColumn('bytecode', 'huntcode');
            $table->renameColumn('bridgebrigadier', 'picktoplace');
            $table->renameColumn('waterrocket', 'speedcubing');
        });
    }
}
