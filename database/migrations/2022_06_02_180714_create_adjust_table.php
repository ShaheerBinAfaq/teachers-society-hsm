<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjust', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('adjust_from')->nullable();
            $table->bigInteger('receipt_no')->nullable();
            $table->bigInteger('adjust_amount')->nullable();
            $table->string('adjust_to')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adjust');
    }
}
