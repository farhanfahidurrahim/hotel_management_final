<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('division_id');
            $table->string('location');
            $table->string('description');
            $table->string('price');
            $table->string('offer_price');
            $table->string('discount');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('contact_no');
            $table->string('facebook_page');
            $table->string('website_link');
            $table->string('youtube_link');
            $table->string('photo');
            $table->string('tags');
            $table->string('services');
            $table->enum('status',[0,1])->default(1);
            $table->enum('popular_deal',['popular','not_popular'])->default('not_popular');
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
        Schema::dropIfExists('hotels');
    }
}
