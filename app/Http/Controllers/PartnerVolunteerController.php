<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerSubmissionRequest;
use App\Http\Requests\VolunteerSubmissionRequest;
use App\Models\PartnerVolunteerSubmission;
use App\Mail\PartnerVolunteerConfirmationMail;
use App\Mail\PartnerVolunteerNotificationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Exception;

class PartnerVolunteerController extends Controller
{
    public function submitPartner(PartnerSubmissionRequest $request)
    {
        try {
            $data = $request->validated();
            $data['type'] = PartnerVolunteerSubmission::TYPE_PARTNER;
            $data['status'] = PartnerVolunteerSubmission::STATUS_NEW;

            $submission = PartnerVolunteerSubmission::create($data);
        } catch (Exception $e) {
            Log::error('Failed to save partner submission: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Something went wrong while saving your request. Please try again.');
        }

        // Try sending emails
        try {
            Mail::to($submission->email)->send(new PartnerVolunteerConfirmationMail($submission));
        } catch (Exception $e) {
            Log::error('Failed sending partner confirmation email: ' . $e->getMessage());
        }

        try {
            Mail::to('info@akinofoundation.org')->send(new PartnerVolunteerNotificationMail($submission));
        } catch (Exception $e) {
            Log::error('Failed sending partner notification email: ' . $e->getMessage());
        }

        return back()->with('msg', 'Thank you! Your partnership request has been received.');
    }

    public function submitVolunteer(VolunteerSubmissionRequest $request)
    {
        try {
            $data = $request->validated();
            $data['type'] = PartnerVolunteerSubmission::TYPE_VOLUNTEER;
            $data['status'] = PartnerVolunteerSubmission::STATUS_NEW;

            $submission = PartnerVolunteerSubmission::create($data);
        } catch (Exception $e) {
            Log::error('Failed to save volunteer submission: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Something went wrong while saving your request. Please try again.');
        }

        // Try sending emails
        try {
            Mail::to($submission->email)->send(new PartnerVolunteerConfirmationMail($submission));
        } catch (Exception $e) {
            Log::error('Failed sending volunteer confirmation email: ' . $e->getMessage());
        }

        try {
            Mail::to('info@akinofoundation.org')->send(new PartnerVolunteerNotificationMail($submission));
        } catch (Exception $e) {
            Log::error('Failed sending volunteer notification email: ' . $e->getMessage());
        }

        return back()->with('msg', 'Thank you! Your volunteer application has been received.');
    }
}
