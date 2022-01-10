<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('cost_of_land_amount');
            $table->bigInteger('cost_of_land_received');
            $table->bigInteger('cost_of_land_balance');
            $table->bigInteger('society_lease_amount');
            $table->bigInteger('society_lease_received');
            $table->bigInteger('society_lease_balance');
            $table->bigInteger('maintenance_amount');
            $table->bigInteger('maintenance_received');
            $table->bigInteger('maintenance_balance');
            $table->bigInteger('internal_development_amount');
            $table->bigInteger('internal_development_received');
            $table->bigInteger('internal_development_balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dues');
    }
}
