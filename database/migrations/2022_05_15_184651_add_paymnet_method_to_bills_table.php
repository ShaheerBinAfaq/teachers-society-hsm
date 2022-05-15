<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymnetMethodToBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->string('payment_method')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('check_number')->nullable();
            $table->date('check_date')->nullable();
            $table->string('others')->nullable();
            $table->bigInteger('total_amount')->nullable();
            $table->bigInteger('total_received')->nullable();
            $table->bigInteger('total_balance')->nullable();
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
            $table->dropColumn('payment_method');
            $table->dropColumn('bank_name');
            $table->dropColumn('check_number');
            $table->dropColumn('check_date');
            $table->dropColumn('others');
            $table->dropColumn('total_amount');
            $table->dropColumn('total_received');
            $table->dropColumn('total_balance');
            
        });
    }
}
