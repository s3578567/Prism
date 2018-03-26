<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->Integer('store_id');
            $table->Integer('product_id');
            $table->Integer('user_id');
            $table->Integer('buy_sell_id');
            $table->dateTime('sale_date');
            $table->string('product_desc');
            $table->float('sale_quantity');
            $table->float('COGS_amount');
            $table->float('netsales_amount');
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
        Schema::dropIfExists('transaction');
    }
}
