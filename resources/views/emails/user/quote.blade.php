@component('mail::message')
# Quote Request Submitted

Your quote request has been submitted successfully. Below are the details:

**Name:** {{ $quote->name }}
**Email:** {{ $quote->email }}
**Phone:** {{ $quote->phone }}
**Vehicle Type:** {{ $quote->vehicle_type }}
**City of Departure:** {{ $quote->city_of_departure }}
**Departure Time:** {{ $quote->departure_time }}
**Type of Goods:** {{ $quote->type_of_goods }}
**Weight of Shipment:** {{ $quote->weight_of_shipment }}
**Delivery Type:** {{ $quote->delivery_type }}
**Date of Shipment:** {{ $quote->date_of_shipment }}
**Tracking Number:** {{ $quote->tracking_number }}

Thank you for choosing our services.

{{ config('app.name') }}
@endcomponent
