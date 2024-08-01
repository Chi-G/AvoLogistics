@component('mail::message')
# Quote Request Received

Dear {{ $quote->name }},

Your quote request has been received and is being processed.

**Tracking Number:** {{ $quote->tracking_number }}

Thank you for choosing our services.

@endcomponent
