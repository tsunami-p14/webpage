<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateICategoryMICategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_category_m_i_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_category_id')->unsigned()->index();
            $table->foreign('i_category_id')->references('id')->on('i_categories');
            $table->integer('m_i_category_id')->unsigned()->index();
            $table->foreign('m_i_category_id')->references('id')->on('m_i_categories');

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
        Schema::dropIfExists('i_category_m_i_category');
    }
}
