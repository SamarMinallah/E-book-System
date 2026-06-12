<?php


namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class subscriptionmail extends Mailable
{
    use Queueable, SerializesModels;


public $mailsubject;
public $mailmassage;
public $plan;
public $plan_duration;
public $plan_amount;




    /**
     * Create a new message instance.
     */
    public function __construct($massage,$subject,$plan,$plan_duration,$plan_amount)
    {
           $this->mailmassage=$massage;
    $this->mailsubject=$subject;
    $this->plan=$plan;
    $this->plan_duration=$plan_duration;
    $this->plan_amount=$plan_amount;
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
           view: 'Mail.plangmail',
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


