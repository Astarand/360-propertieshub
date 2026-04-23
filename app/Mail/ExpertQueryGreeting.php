<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExpertQueryGreeting extends Mailable
{
    use Queueable, SerializesModels;

    public $queryData;

    public function __construct($queryData)
    {
        $this->queryData = $queryData;
    }

    public function build()
    {
        return $this->subject('Thank you for your expert query - 360 Properties Hub')
                    ->view('emails.expert-query-greeting')
                    ->with('data', $this->queryData);
    }
}