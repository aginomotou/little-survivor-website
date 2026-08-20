<?php

namespace Tests\Feature;

use App\Mail\GuestInquiryConfirmation;
use App\Mail\StaffInquiryNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class InquirySubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_inquiry_is_stored_and_both_emails_are_queued(): void
    {
        Mail::fake();

        $response = $this->postJson('/api/inquiries', [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'juan@example.com',
            'topic' => 'rates',
            'message' => 'Hi, is there availability next weekend?',
        ]);

        $response->assertCreated()
            ->assertJsonPath('status', 'success')
            ->assertJsonPath('message', 'Thank you! Your inquiry has been received. We\'ll get back to you within 24 hours.');

        $this->assertDatabaseHas('inquiries', [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'juan@example.com',
            'topic' => 'rates',
            'message' => 'Hi, is there availability next weekend?',
        ]);

        Mail::assertQueued(StaffInquiryNotification::class, function (StaffInquiryNotification $mail) {
            return $mail->inquiry->email === 'juan@example.com'
                && $mail->hasReplyTo('juan@example.com');
        });

        Mail::assertQueued(GuestInquiryConfirmation::class, function (GuestInquiryConfirmation $mail) {
            return $mail->hasTo('juan@example.com');
        });
    }

    public function test_inquiry_requires_all_fields(): void
    {
        $response = $this->postJson('/api/inquiries', []);

        $response->assertUnprocessable()
            ->assertJsonValidationErrors(['first_name', 'last_name', 'email', 'topic', 'message']);
    }

    public function test_email_must_be_valid(): void
    {
        $response = $this->postJson('/api/inquiries', [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'not-an-email',
            'topic' => 'Rates',
            'message' => 'Hello!',
        ]);

        $response->assertUnprocessable()
            ->assertJsonValidationErrors(['email']);
    }

    public function test_message_exceeding_max_length_is_rejected(): void
    {
        $response = $this->postJson('/api/inquiries', [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'juan@example.com',
            'topic' => 'Rates',
            'message' => str_repeat('a', 1001),
        ]);

        $response->assertUnprocessable()
            ->assertJsonValidationErrors(['message']);
    }

    public function test_invalid_submissions_do_not_consume_rate_limit(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->postJson('/api/inquiries', [])
                ->assertUnprocessable();
        }

        $this->postJson('/api/inquiries', [])
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['first_name']);
    }

    public function test_fifth_valid_submission_in_a_minute_is_throttled(): void
    {
        Mail::fake();

        $payload = [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'juan@example.com',
            'topic' => 'rates',
            'message' => 'Hello!',
        ];

        for ($i = 0; $i < 5; $i++) {
            $this->postJson('/api/inquiries', $payload)
                ->assertCreated();
        }

        $this->postJson('/api/inquiries', $payload)
            ->assertStatus(429);
    }
}