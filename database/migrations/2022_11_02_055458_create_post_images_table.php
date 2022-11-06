<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('image_id');
            $table->timestamps();
            $table->index('post_id', 'post_image_post_idx');
            $table->index('image_id', 'post_image_image_idx');
            $table->foreign('post_id', 'post_image_post_fk')->on('posts')->references('id');
            $table->foreign('image_id', 'post_image_image_fk')->on('images')->references('id');
            $table->softDeletes();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_images');
    }
}
