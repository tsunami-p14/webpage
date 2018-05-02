<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIInterfaceMIInterfaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_interface_m_i_interface', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_interface_id')->unsigned()->index();
            $table->foreign('i_interface_id')->references('id')->on('i_interfaces');
            $table->integer('m_i_interface_id')->unsigned()->index();
            $table->foreign('m_i_interface_id')->references('id')->on('m_i_interfaces');
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
        Schema::dropIfExists('i_interface_m_i_interface');
    }
}
