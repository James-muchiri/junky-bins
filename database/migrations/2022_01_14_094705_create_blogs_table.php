<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');         
            $table->string('email');
            $table->string('authorname');
           $table->text('blog')->nullable();
           $table->text('bloginfo');
           $table->text('blog_description');
           $table->string('post_blog_id');
           $table->string('comments_count')->default('0');
           $table->string('header_image');          
            $table->enum('is_hidden', ['yes', 'no'])->default('yes');
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
        Schema::dropIfExists('blogs');
    }
}
