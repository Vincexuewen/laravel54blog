<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    public $subject;
    public $filePath;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$subject,$filePath)
    {
        //
        $this->username = $username;
        $this->subject = $subject;
        $this->filePath = $filePath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->filePath){
            return $this->from('810092804@qq.com', 'Vince')
                        ->subject($this->subject)
                        ->view('Blog.Admin.Email.layout')
                        ->with('username',$this->username)
                        ->attach($this->filePath);
        }
        return $this->from('810092804@qq.com', 'Vince')
                    ->subject($this->subject)
                    ->view('Blog.Admin.Email.layout')
                    ->with('username',$this->username);
    }
}
