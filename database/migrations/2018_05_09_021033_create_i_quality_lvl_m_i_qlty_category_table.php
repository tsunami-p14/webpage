<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIQualityLvlMIQltyCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_quality_lvl_m_i_qlty_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_quality_lvl_id')->unsigned()->index();
            $table->foreign('i_quality_lvl_id')->references('id')->on('i_quality_lvls');
            $table->integer('m_i_qlty_category_id')->unsigned()->index();
            $table->foreign('m_i_qlty_category_id')->references('id')->on('m_i_qlty_categories');
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
        Schema::dropIfExists('i_quality_lvl_m_i_qlty_category');
    }
}
