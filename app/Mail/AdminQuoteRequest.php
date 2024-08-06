<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\RequestAQuote;

class AdminQuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $requestQuote;

    public function __construct(RequestAQuote $requestQuote)
    {
        $this->requestQuote = $requestQuote;
    }

    public function build()
    {
        return $this->markdown('emails.admin.quote')->with('requestQuote', $this->requestQuote);
    }
}
