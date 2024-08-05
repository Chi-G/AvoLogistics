<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_bg_title',
        'blog_bg_desc',
        'image_sm',
        'blog_title',
        'blog_short_desc',
        'image_bg',
        'blog_long_desc1',
        'blog_long_desc2',
        'blog_snippet',
    ];
}
