<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCostOfSideToBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->bigInteger('cost_of_road_facing_amount')->nullable();
            $table->bigInteger('cost_of_road_facing_received')->nullable();
            $table->bigInteger('cost_of_road_facing_balance')->nullable();
            $table->bigInteger('cost_of_west_open_amount')->nullable();
            $table->bigInteger('cost_of_west_open_received')->nullable();
            $table->bigInteger('cost_of_west_open_balance')->nullable();
            $table->bigInteger('cost_of_park_facing_amount')->nullable();
            $table->bigInteger('cost_of_park_facing_received')->nullable();
            $table->bigInteger('cost_of_park_facing_balance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->dropColumn('cost_of_road_facing_amount');
            $table->dropColumn('cost_of_road_facing_received');
            $table->dropColumn('cost_of_road_facing_balance');
            $table->dropColumn('cost_of_west_open_amount');
            $table->dropColumn('cost_of_west_open_received');
            $table->dropColumn('cost_of_west_open_balance');
            $table->dropColumn('cost_of_park_facing_amount');
            $table->dropColumn('cost_of_park_facing_received');
            $table->dropColumn('cost_of_park_facing_balance');
        });
    }
}
