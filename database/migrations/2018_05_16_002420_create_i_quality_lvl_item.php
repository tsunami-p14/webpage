<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIQualityLvlItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_quality_lvl_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('i_quality_lvl_id')->unsigned()->index();
            $table->foreign('i_quality_lvl_id')->references('id')->on('i_quality_lvls');
            $table->integer('item_id')->unsigned()->index();
            $table->foreign('item_id')->references('id')->on('items');
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
        Schema::dropIfExists('i_quality_lvl_item');
    }
}
