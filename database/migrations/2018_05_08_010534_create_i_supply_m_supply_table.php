<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateISupplyMSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_supply_m_supply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_supply_id')->unsigned()->index();
            $table->foreign('i_supply_id')->references('id')->on('i_supplies');
            $table->integer('m_supply_id')->unsigned()->index();
            $table->foreign('m_supply_id')->references('id')->on('m_supplies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_supply_m_supply');
    }
}
