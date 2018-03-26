<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuySellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_sell', function (Blueprint $table) {
            $table->increments('buy_sell_id');
            $table->Integer('store_id');
            $table->Integer('user_id');
            $table->Integer('product_id');
            $table->boolean('buy_sell');
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
        Schema::dropIfExists('buy_sell');
    }
}
