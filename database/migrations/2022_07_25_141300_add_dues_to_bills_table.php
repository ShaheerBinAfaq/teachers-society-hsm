<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDuesToBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *     admission_fee_received
    share_money_received
    cost_of_land_received
    cost_of_corner_received
    lease_documentation_received
    cost_of_development_received
    cost_of_transfer_received
    establishment_charges_received
    miscellaneous_received
    cost_of_forms_received
    cost_of_road_facing_received
    cost_of_west_open_received
    cost_of_park_facing_received
cost_of_extra_land_facing_received

     */
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->bigInteger('admission_fee_due')->nullable();
            $table->bigInteger('share_money_due')->nullable();
            $table->bigInteger('cost_of_land_due')->nullable();
            $table->bigInteger('cost_of_corner_due')->nullable();
            $table->bigInteger('lease_documentation_due')->nullable();
            $table->bigInteger('cost_of_development_due')->nullable();
            $table->bigInteger('cost_of_transfer_due')->nullable();
            $table->bigInteger('establishment_charges_due')->nullable();
            $table->bigInteger('miscellaneous_due')->nullable();
            $table->bigInteger('cost_of_forms_due')->nullable();
            $table->bigInteger('cost_of_road_facing_due')->nullable();
            $table->bigInteger('cost_of_west_open_due')->nullable();
            $table->bigInteger('cost_of_park_facing_due')->nullable();
            $table->bigInteger('cost_of_extra_land_facing_due')->nullable();
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
            $table->dropColumn('admission_fee_due');
            $table->dropColumn('share_money_due');
            $table->dropColumn('cost_of_land_due');
            $table->dropColumn('cost_of_corner_due');
            $table->dropColumn('lease_documentation_due');
            $table->dropColumn('cost_of_development_due');
            $table->dropColumn('cost_of_transfer_due');
            $table->dropColumn('establishment_charges_due');
            $table->dropColumn('miscellaneous_due');
            $table->dropColumn('cost_of_forms_due');
            $table->dropColumn('cost_of_road_facing_due');
            $table->dropColumn('cost_of_west_open_due');
            $table->dropColumn('cost_of_park_facing_due');
            $table->dropColumn('cost_of_extra_land_facing_due');
        });
    }
}
