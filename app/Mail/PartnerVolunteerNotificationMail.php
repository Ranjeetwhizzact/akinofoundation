<?php

namespace App\Mail;

use App\Models\PartnerVolunteerSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerVolunteerNotificationMail extends Mailable
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
            ? 'New Partner Request: ' . $this->submission->organization_name
            : 'New Volunteer Application: ' . $this->submission->full_name;

        return $this->subject($subject)
                    ->view('emails.submissions.notification');
    }
}
