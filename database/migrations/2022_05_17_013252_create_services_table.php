<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price')->nullable();
            $table->boolean('dune_bashing')->default(0)->nullable();
            $table->boolean('belly_dance')->default(0)->nullable();
            $table->boolean('fire_show')->default(0)->nullable();
            $table->boolean('sand_boarding')->default(0)->nullable();
            $table->boolean('tanoura_show')->default(0)->nullable();
            $table->boolean('refreshments')->default(0)->nullable();
            $table->boolean('short_camel_ride')->default(0)->nullable();
            $table->boolean('photography')->default(0)->nullable();
            $table->boolean('henaa_tattoo')->default(0)->nullable();
            $table->integer('display_order');
            $table->longText('description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
