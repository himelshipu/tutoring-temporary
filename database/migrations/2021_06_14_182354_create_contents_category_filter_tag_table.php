<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsCategoryFilterTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents_category_filter_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filter_id');
            $table->string('tag');
            $table->integer('sort');
            $table->foreign('filter_id')->references('id')->on('contents_category_filter')->onDelete('cascade');
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
        Schema::dropIfExists('contents_category_filter_tag');
    }
}
