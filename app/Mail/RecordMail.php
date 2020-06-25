<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $record;

    /**
     * Create a new message instance.
     *
     * @param $record
     */
    public function __construct($record)
    {
        $this->record = $record;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Вы записаны на прием!')
            ->view('emails.recordMessage', ['record', $this->record]);
    }
}
