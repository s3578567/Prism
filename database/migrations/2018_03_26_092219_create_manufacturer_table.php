<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer', function (Blueprint $table) {
            $table->increments('manufacturer_id');
            $table->string('manufacturer_name');
            $table->string('street');
            $table->string('surburb_town');
            $table->string('state');
            $table->string('post_code');
            $table->mediumInteger('phone_number');
            $table->mediumInteger('mobile_number');
            $table->string('email');
            $table->mediumInteger('fax_number');
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
        Schema::dropIfExists('manufacturer');
    }
}
