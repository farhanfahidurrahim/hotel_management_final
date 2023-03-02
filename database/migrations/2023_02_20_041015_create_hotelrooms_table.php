<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelrooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('description');
            $table->string('offer_start_date');
            $table->string('offer_end_date');
            $table->string('beds');
            $table->string('baths');
            $table->string('price');
            $table->string('discount');
            $table->string('discount_price');
            $table->string('max_occupancy');
            $table->string('private_policy');
            $table->string('info');
            $table->string('image');
            $table->timestamps();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotelrooms');
    }
}
