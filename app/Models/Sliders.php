<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    use HasFactory;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'image', 
        'title', 
        'description',
    ];

    // If you want to use date casting for specific attributes
    protected $dates = ['created_at', 'updated_at'];

    // Example of a relationship (if applicable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
