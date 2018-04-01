<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->integer('user_id');
            $table->integer('subcategory_id');
            $table->string('ad_type');
            $table->string('ad_title');
            $table->string('item_condition');
            $table->string('item_price');
            $table->tinyInteger('price_negotiable')->default(0);
            $table->string('model');
            $table->text('short_description',500);
            $table->text('long_description',5000);
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
        Schema::dropIfExists('posts');
    }
}
