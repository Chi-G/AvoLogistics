<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAQuote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'vehicle_type',
        'city_of_departure',
        'departure_time',
        'type_of_goods',
        'weight_of_shipment',
        'delivery_type',
        'tracking_number',
        'date_of_shipment',
        'route_type',
        'stateroute',
        'total_cost',
    ];
}
