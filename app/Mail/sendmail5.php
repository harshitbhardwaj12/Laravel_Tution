<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendmail5 extends Mailable
{
    use Queueable, SerializesModels;

    public $email_details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_details)
    {
        $this->email_details = $email_details;
        // $this->return_value = $return_email3;
    }
   
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $return_value1=$return_email3;
        // $request_file="files/syllabus/"+$return_value;
        // $files=[public_path('files/syllabus/csecec.1802936@gmail.com.pdf')];
        return $this->subject('Mail from Home Tution')->view('syllabus_alert_email')->attach(public_path("files/syllabus/csecec.1802936@gmail.com.pdf"));

    }
}
