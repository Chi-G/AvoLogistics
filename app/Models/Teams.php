<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'image',
        'short_desc',
        'fb',
        'linkedIn',
        'twitter',
        'IG	',
    ];
}
