<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typecode');
            $table->float('scale_w',8,2);
            $table->float('scale_d',8,2);
            $table->float('scale_h',8,2);
            $table->float('weight',8,2);
            $table->integer('m_maker_id')->unsigned()->index();
            $table->foreign('m_maker_id')->references('id')->on('m_makers');
            $table->integer('i_category_id')->unsigned()->index();
            $table->foreign('i_category_id')->references('id')->on('i_categories');
            $table->integer('i_interface_id')->unsigned()->index();
            $table->foreign('i_interface_id')->references('id')->on('i_interfaces');
            $table->integer('i_function_id')->unsigned()->index();
            $table->foreign('i_function_id')->references('id')->on('i_functions');
            $table->softDeletes();
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
        Schema::dropIfExists('m_items');
    }
}
