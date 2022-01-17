<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlotDetailToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('dei')->nullable();
            $table->string('survey')->nullable();
            $table->string('phase')->nullable();
            $table->string('block')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('dei');
            $table->dropColumn('survey');
            $table->dropColumn('phase');
            $table->dropColumn('block');
        });
    }
}
