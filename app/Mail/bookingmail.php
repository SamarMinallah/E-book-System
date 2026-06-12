<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class bookingmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailsubject;
public $mailmassage;
public $price;
public $format;
public $booksname;
public $bookpdf;
public $payment_method; 


    /**
     * Create a new message instance.
     */
    public function __construct($massage,$subject,$bookformate,$bookamount,$bookname,$pdf, $payment_method)
    {
           $this->mailmassage=$massage;
    $this->mailsubject=$subject;
    $this->price=$bookamount;
    $this->format=$bookformate;
    $this->booksname=$bookname;
    $this->bookpdf=$pdf;
    $this->payment_method = $payment_method; 
    }
public function build()
    {
        return $this->subject($this->mailsubject)
                    ->view('Mail.index'); // Ensure this matches your blade path
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mailsubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
           view: 'Mail.index',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
