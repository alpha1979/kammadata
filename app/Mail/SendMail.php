<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    
    protected $name;
    protected $friend_name;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */

     
    public function __construct($name,$friend_name)
    {
        //

        $this->name = $name;
        $this->friend_name = $friend_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mail')->with([
            'yourname' => $this->name,
            'friend_name'=>$this->friend_name,
        ]);
    }
}