@component('mail::message')
# New Quote Request

You have received a new quote request.

**Name:** {{ $quote->name }}
**Email:** {{ $quote->email }}
**Phone:** {{ $quote->phone }}
**Vehicle Type:** {{ $quote->vehicle_type }}
**City of Departure:** {{ $quote->city_of_departure }}
**Departure Time:** {{ $quote->departure_time }}
**Type of Goods:** {{ $quote->type_of_goods }}
**Weight of Shipment:** {{ $quote->weight_of_shipment }}
**Delivery Type:** {{ $quote->delivery_type }}
**Tracking Number:** {{ $quote->tracking_number }}

@endcomponent
