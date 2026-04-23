<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExpertQueryAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $queryData;

    public function __construct($queryData)
    {
        $this->queryData = $queryData;
    }

    public function build()
    {
        return $this->subject('New Expert Query - ' . $this->queryData['subject'])
                    ->view('emails.expert-query-admin')
                    ->with('data', $this->queryData);
    }
}