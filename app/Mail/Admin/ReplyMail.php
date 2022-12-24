<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }
    
    public function build()
    {
        if (isset($this->mailData['attachment'])) {
            return $this->subject($this->mailData['subject'])
            ->attach(asset($this->mailData['attachment']))
            ->view('emails.replymail');
        } else {
            return $this->subject($this->mailData['subject'])
            ->view('emails.replymail');
        }
    }
}