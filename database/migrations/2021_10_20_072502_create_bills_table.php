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
            $table->foreignId('transfer_id')->nullable();
            $table->bigInteger('member_id')->nullable();
            $table->bigInteger('admission_fee_amount')->nullable();
            $table->bigInteger('admission_fee_received')->nullable();
            $table->bigInteger('admission_fee_balance')->nullable();
            $table->bigInteger('share_money_amount')->nullable();
            $table->bigInteger('share_money_received')->nullable();
            $table->bigInteger('share_money_balance')->nullable();
            $table->bigInteger('cost_of_land_amount')->nullable();
            $table->bigInteger('cost_of_land_received')->nullable();
            $table->bigInteger('cost_of_land_balance')->nullable();
            $table->bigInteger('cost_of_corner_amount')->nullable();
            $table->bigInteger('cost_of_corner_received')->nullable();
            $table->bigInteger('cost_of_corner_balance')->nullable();
            $table->bigInteger('lease_documentation_amount')->nullable();
            $table->bigInteger('lease_documentation_received')->nullable();
            $table->bigInteger('lease_documentation_balance')->nullable();
            $table->bigInteger('cost_of_development_amount')->nullable();
            $table->bigInteger('cost_of_development_received')->nullable();
            $table->bigInteger('cost_of_development_balance')->nullable();
            $table->bigInteger('cost_of_transfer_amount')->nullable();
            $table->bigInteger('cost_of_transfer_received')->nullable();
            $table->bigInteger('cost_of_transfer_balance')->nullable();
            $table->string('from')->nullable();
            $table->bigInteger('vide_account_no')->nullable();
            $table->bigInteger('establishment_charges_amount')->nullable();
            $table->bigInteger('establishment_charges_received')->nullable();
            $table->bigInteger('establishment_charges_balance')->nullable();
            $table->bigInteger('miscellaneous_amount')->nullable();
            $table->bigInteger('miscellaneous_received')->nullable();
            $table->bigInteger('miscellaneous_balance')->nullable();
            $table->bigInteger('cost_of_forms_amount')->nullable();
            $table->bigInteger('cost_of_forms_received')->nullable();
            $table->bigInteger('cost_of_forms_balance')->nullable();
            $table->bigInteger('ledger_account_no')->nullable();
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
