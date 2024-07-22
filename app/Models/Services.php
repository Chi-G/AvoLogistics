<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_title1',
        'service_title2',
        'service_title3',
        'service_title4',
        'service_desc1',
        'service_desc2',
        'service_desc3',
        'service_desc4',
        'offer_bg_title',
        'offer_title1',
        'offer_title2',
        'offer_title3',
        'offer_desc1',
        'offer_desc2',
        'offer_desc3',
        'service_details_title',
        'service_details_bg_desc',
        'image',
    ];
}
