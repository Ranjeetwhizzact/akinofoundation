<?php

namespace Tests\Feature;

use App\Models\PartnerVolunteerSubmission;
use App\Mail\PartnerVolunteerConfirmationMail;
use App\Mail\PartnerVolunteerNotificationMail;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Exception;

class PartnerVolunteerSubmissionTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    /** @test */
    public function a_valid_partner_submission_creates_a_database_record_and_triggers_emails()
    {
        $data = [
            'full_name' => 'John Partner',
            'email' => 'partner@example.com',
            'phone' => '1234567890',
            'location' => 'Navi Mumbai',
            'organization_name' => 'Partner Corp',
            'website' => 'https://partnercorp.com',
            'partnership_type' => 'corporate',
            'message' => 'We want to collaborate on education projects.',
        ];

        $response = $this->post('/submit/partner', $data);

        $response->assertStatus(302);
        $response->assertSessionHas('msg');

        $this->assertDatabaseHas('partner_volunteer_submissions', [
            'type' => 'partner',
            'full_name' => 'John Partner',
            'email' => 'partner@example.com',
            'phone' => '1234567890',
            'location' => 'Navi Mumbai',
            'organization_name' => 'Partner Corp',
            'website' => 'https://partnercorp.com',
            'partnership_type' => 'corporate',
            'message' => 'We want to collaborate on education projects.',
            'status' => 'new',
        ]);

        Mail::assertSent(PartnerVolunteerConfirmationMail::class, function ($mail) use ($data) {
            return $mail->hasTo($data['email']) && $mail->submission->full_name === 'John Partner';
        });

        Mail::assertSent(PartnerVolunteerNotificationMail::class, function ($mail) {
            return $mail->hasTo('info@akinofoundation.org');
        });
    }

    /** @test */
    public function a_valid_volunteer_submission_creates_a_database_record_and_triggers_emails()
    {
        $data = [
            'full_name' => 'Jane Volunteer',
            'email' => 'volunteer@example.com',
            'phone' => '0987654321',
            'location' => 'Mumbai',
            'skills_or_interests' => 'Teaching English, Event Coordination',
            'availability' => 'weekends',
            'previous_experience' => 'Taught kids at local orphanage.',
            'message' => 'I love working with children.',
        ];

        $response = $this->post('/submit/volunteer', $data);

        $response->assertStatus(302);
        $response->assertSessionHas('msg');

        $this->assertDatabaseHas('partner_volunteer_submissions', [
            'type' => 'volunteer',
            'full_name' => 'Jane Volunteer',
            'email' => 'volunteer@example.com',
            'phone' => '0987654321',
            'location' => 'Mumbai',
            'skills_or_interests' => 'Teaching English, Event Coordination',
            'availability' => 'weekends',
            'previous_experience' => 'Taught kids at local orphanage.',
            'message' => 'I love working with children.',
            'status' => 'new',
        ]);

        Mail::assertSent(PartnerVolunteerConfirmationMail::class, function ($mail) use ($data) {
            return $mail->hasTo($data['email']) && $mail->submission->full_name === 'Jane Volunteer';
        });

        Mail::assertSent(PartnerVolunteerNotificationMail::class, function ($mail) {
            return $mail->hasTo('info@akinofoundation.org');
        });
    }

    /** @test */
    public function invalid_partner_submissions_do_not_create_records()
    {
        // Missing required fields: full_name, email, phone, etc.
        $data = [
            'website' => 'invalid-url',
        ];

        $response = $this->post('/submit/partner', $data);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['full_name', 'email', 'phone', 'organization_name', 'partnership_type', 'location', 'message', 'website']);
        
        $this->assertDatabaseMissing('partner_volunteer_submissions', [
            'website' => 'invalid-url',
        ]);

        Mail::assertNothingSent();
    }

    /** @test */
    public function invalid_volunteer_submissions_do_not_create_records()
    {
        // Missing required fields
        $data = [
            'previous_experience' => 'Some exp',
        ];

        $response = $this->post('/submit/volunteer', $data);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['full_name', 'email', 'phone', 'location', 'skills_or_interests', 'availability', 'message']);
        
        $this->assertDatabaseMissing('partner_volunteer_submissions', [
            'previous_experience' => 'Some exp',
        ]);

        Mail::assertNothingSent();
    }

    /** @test */
    public function email_failures_do_not_delete_an_already_saved_submission()
    {
        // Mock Mail facade to throw exception when sending
        Mail::shouldReceive('to')->andThrow(new Exception('SMTP connection failed'));

        $data = [
            'full_name' => 'Jane Resilient',
            'email' => 'resilient@example.com',
            'phone' => '1122334455',
            'location' => 'Vashi',
            'skills_or_interests' => 'Cooking',
            'availability' => 'flexible',
            'message' => 'Email fails, but I still want to be registered!',
        ];

        $response = $this->post('/submit/volunteer', $data);

        $response->assertStatus(302);
        // It should still return success session message since it succeeded saving to DB
        $response->assertSessionHas('msg');

        $this->assertDatabaseHas('partner_volunteer_submissions', [
            'type' => 'volunteer',
            'full_name' => 'Jane Resilient',
            'email' => 'resilient@example.com',
            'phone' => '1122334455',
            'location' => 'Vashi',
        ]);
    }
}
