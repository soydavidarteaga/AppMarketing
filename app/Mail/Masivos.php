<?php

namespace Marketing\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Masivos extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $subject;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content,$subject,$name)
    {
        $this->content = $content;
        $this->subject = $subject;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.massive')
                    ->from('redes@realgestion.com.ve')
                    ->subject($this->subject);
    }
}
