<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsBoxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_box', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('size')->nullable();
            $table->text('position')->nullable();
            $table->text('image')->nullable();
            $table->text('url')->nullable();
            $table->string('mode')->default('draft');
            $table->integer('sort')->default(1);
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
        Schema::dropIfExists('ads_box');
    }
}
