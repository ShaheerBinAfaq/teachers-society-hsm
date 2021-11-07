<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('transfer_id');
            $table->bigInteger('admission_fee_amount');
            $table->bigInteger('admission_fee_received');
            $table->bigInteger('admission_fee_balance');
            $table->bigInteger('share_money_amount');
            $table->bigInteger('share_money_received');
            $table->bigInteger('share_money_balance');
            $table->bigInteger('cost_of_land_amount');
            $table->bigInteger('cost_of_land_received');
            $table->bigInteger('cost_of_land_balance');
            $table->bigInteger('cost_of_corner_amount');
            $table->bigInteger('cost_of_corner_received');
            $table->bigInteger('cost_of_corner_balance');
            $table->bigInteger('lease_documentation_amount');
            $table->bigInteger('lease_documentation_received');
            $table->bigInteger('lease_documentation_balance');
            $table->bigInteger('cost_of_development_amount');
            $table->bigInteger('cost_of_development_received');
            $table->bigInteger('cost_of_development_balance');
            $table->bigInteger('cost_of_transfer_amount');
            $table->bigInteger('cost_of_transfer_received');
            $table->bigInteger('cost_of_transfer_balance');
            $table->string('from');
            $table->bigInteger('vide_account_no');
            $table->bigInteger('establishment_charges_amount');
            $table->bigInteger('establishment_charges_received');
            $table->bigInteger('establishment_charges_balance');
            $table->bigInteger('miscellaneous_amount');
            $table->bigInteger('miscellaneous_received');
            $table->bigInteger('miscellaneous_balance');
            $table->bigInteger('cost_of_forms_amount');
            $table->bigInteger('cost_of_forms_received');
            $table->bigInteger('cost_of_forms_balance');
            $table->bigInteger('ledger_account_no');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
