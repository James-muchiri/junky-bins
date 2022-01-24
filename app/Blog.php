<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $fillable = [
        'email', 'authorname', 'blog', 'bloginfo', 'post_blog_id'
    ];
}
