@component('mail::message')
# Quote Request Submitted

Your quote request has been submitted successfully. Below are the details:

<h2>Request a Quote Details</h2>
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Phone: {{ $data['phone'] }}</p>
    <p>Vehicle Type: {{ $data['vehicle_type'] }}</p>
    <p>City of Departure: {{ $data['city_of_departure'] }}</p>
    <p>Departure Time: {{ $data['departure_time'] }}</p>
    <p>Type of Goods: {{ $data['type_of_goods'] }}</p>
    <p>Weight of Shipment: {{ $data['weight_of_shipment'] }}</p>
    <p>Delivery Type: {{ $data['delivery_type'] }}</p>
    <p>Tracking Number: {{ $data['tracking_number'] }}</p>
    <p>Date of Shipment: {{ $data['date_of_shipment'] }}</p>
    <p>Route Type: {{ $data['route_type'] }}</p>
    <p>State Route: {{ $data['stateroute'] }}</p>
    <p>Mileage: {{ $data['mileage'] }} miles</p>
    <p>Total Cost: ${{ $data['total_cost'] }}</p>

Thank you for choosing our services.

{{ config('app.name') }}
@endcomponent
