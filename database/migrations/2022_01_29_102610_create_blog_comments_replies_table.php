<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');  
            $table->string('email');       
            $table->string('website');  
            $table->text('message');  
            $table->string('comment_id');       
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
        Schema::dropIfExists('blog_comments_replies');
    }
}
