<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelfStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelf_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shelf_id')->unsigned()->index();
            $table->foreign('shelf_id')->references('id')->on('shelves');
            $table->integer('stock_id')->unsigned()->index();
            $table->foreign('stock_id')->references('id')->on('stocks');
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
        Schema::dropIfExists('shelf_stock');
    }
}
