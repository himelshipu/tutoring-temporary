<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('private')->default(0);
            $table->integer('view')->default(0);
            $table->integer('support_rate')->default(0);
            $table->integer('download')->default(1);
            $table->float('price_3')->nullable();
            $table->float('price_6')->nullable();
            $table->float('price_9')->nullable();
            $table->float('price_12')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('type')->nullable();
            $table->text('content_type')->nullable();
            $table->string('support')->nullable();
            $table->string('document')->nullable();
            $table->string('post')->nullable();
            $table->string('price')->nullable();
            $table->string('price_post')->nullable();
            $table->string('mode')->nullable();
            $table->string('request')->nullable();
            $table->text('prerequisite')->nullable();
            $table->text('tag')->nullable();
            $table->text('subscribe_3')->nullable();
            $table->text('subscribe_6')->nullable();
            $table->text('subscribe_9')->nullable();
            $table->text('subscribe_12')->nullable();
            $table->text('meeting_type')->nullable();
            $table->text('meeting_join_url')->nullable();
            $table->text('meeting_start_url')->nullable();
            $table->text('meeting_mode')->nullable();
            $table->text('meeting_password')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->integer('status')->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('contents_category')->onDelete('cascade');

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
        Schema::dropIfExists('contents_');
    }
}
