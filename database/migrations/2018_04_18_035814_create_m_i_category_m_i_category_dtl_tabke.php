<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMICategoryMICategoryDtlTabke extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_i_category_m_i_category_dtl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('m_i_category_id')->unsigned()->index();
            $table->integer('m_i_category_dtl_id')->unsigned()->index();

            $table->foreign('m_i_category_id')->references('id')->on('m_i_categories');
            $table->foreign('m_i_category_dtl_id')->references('id')->on('m_i_category_dtls');

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
        Schema::dropIfExists('m_i_category_m_i_category_dtl');
    }
}
