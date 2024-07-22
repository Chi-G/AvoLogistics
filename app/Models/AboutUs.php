<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'image1',
        'aboutus_title1',
        'aboutus_desc1',
        'mission_desc',
        'vision_desc',
        'goal_desc',
        'image2',
        'aboutus_title2',
        'aboutus_desc2',
    ];
}
