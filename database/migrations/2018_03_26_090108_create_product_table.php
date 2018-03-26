<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->Integer('store_id');
            $table->string('product_name');
            $table->string('product_spec');
            $table->string('product_bio_chemical');
            $table->float('product_price');
            $table->dateTime('product_expiry');
            $table->string('product_PDE');
            $table->Integer('product_quantity');
            $table->float('product_post_cost');
            //$table->blob('product_image');
            $table->float('product_GST');
            $table->float('product_discount');
            $table->boolean('fast_movers');
            $table->boolean('slow_movers');
            $table->boolean('dead_stock');
            
            
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
        Schema::dropIfExists('product');
    }
}
