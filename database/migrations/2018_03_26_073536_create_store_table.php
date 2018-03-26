<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('store_id');
            $table->Integer('item_id');
            $table->string('store_name');
            $table->string('store_street');
            $table->string('suburb_town');
            $table->string('state');
            $table->string('postcode');
            $table->string('pharmacy_appoval_number/ACN');
            $table->string('ABN');
            $table->mediumInteger('phoneNumber');
            $table->mediumInteger('mobileNumber');
            $table->mediumInteger('faxNumber');
            $table->string('business_email');
            
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
        Schema::dropIfExists('store');
    }
}
