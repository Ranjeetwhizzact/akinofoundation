<?php

namespace App\Mail;

use App\Models\PartnerVolunteerSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerVolunteerConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    public function __construct(PartnerVolunteerSubmission $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {
        $subject = $this->submission->type === PartnerVolunteerSubmission::TYPE_PARTNER
            ? 'Thank you for partnering with Akino Foundation'
            : 'Thank you for volunteering with Akino Foundation';

        return $this->subject($subject)
                    ->view('emails.submissions.confirmation');
    }
}
