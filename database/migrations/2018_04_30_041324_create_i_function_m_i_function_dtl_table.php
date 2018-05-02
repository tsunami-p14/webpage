<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIFunctionMIFunctionDtlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_function_m_i_function_dtl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_function_id')->unsigned()->index();
            $table->foreign('i_function_id')->references('id')->on('i_functions');
            $table->integer('m_i_function_dtl_id')->unsigned()->index();
            $table->foreign('m_i_function_dtl_id')->references('id')->on('m_i_function_dtls');
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
        Schema::dropIfExists('i_function_m_i_function_dtl');
    }
}
