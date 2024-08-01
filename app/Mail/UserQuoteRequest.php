<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\RequestAQuote;

class UserQuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $quote;

    public function __construct(RequestAQuote $quote)
    {
        $this->quote = $quote;
    }

    public function build()
    {
        return $this->markdown('emails.user.quote')->with('quote', $this->quote);
    }
}
