<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsCategoryFilterTagRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents_category_filter_tag_relation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('filter_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('contents_category')->onDelete('cascade');
            $table->foreign('filter_id')->references('id')->on('contents_category_filter')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('contents_category_filter_tag')->onDelete('cascade');

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
        Schema::dropIfExists('contents_category_filter_tag_relation');
    }
}
