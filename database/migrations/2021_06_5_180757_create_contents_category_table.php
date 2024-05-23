<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents_category', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->integer('commision')->nullable();
            $table->string('title')->nullable();
            $table->text('image')->nullable();
            $table->string('class')->nullable();
            $table->string('mode')->nullable();
            $table->string('color')->default('#FFAB00');
            $table->text('background')->nullable();
            $table->text('icon')->nullable();
            $table->text('req_icon')->nullable();
            $table->text('app_icon')->nullable();
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
        Schema::dropIfExists('contents_category');
    }
}
