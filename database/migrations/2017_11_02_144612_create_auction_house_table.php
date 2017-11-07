<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_house', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("price");
            $table->string("title", 30);
            $table->text("description");
            $table->boolean('sold')->default(true);
            $table->string('image', 250)->nullable();
            $table->integer("user_id");
            $table->foreign("user_id")->references('id')->on("user_id");
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
        Schema::dropIfExists('auction_house');
    }
}
