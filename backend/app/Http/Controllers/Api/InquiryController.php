<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInquiryRequest;
use App\Mail\GuestInquiryConfirmation;
use App\Mail\StaffInquiryNotification;
use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class InquiryController extends Controller
{
    /**
     * Persist a guest inquiry and notify both staff and the guest.
     */
    public function store(StoreInquiryRequest $request): JsonResponse
    {
        if ($request->filled('website')) {
            return $this->success();
        }

        if (! $this->consumeRateLimits($request)) {
            return response()->json([
                'status' => 'error',
                'message' => 'You\'ve sent too many messages. Please wait about a minute and try again.',
            ], 429);
        }

        $inquiry = Inquiry::create($request->validated());

        Mail::to(config('mail.staff_alert_address'))
            ->queue(new StaffInquiryNotification($inquiry));

        Mail::to($inquiry->email)
            ->queue(new GuestInquiryConfirmation($inquiry));

        return $this->success();
    }

    /**
     * Apply per-IP and per-email rate limits. Only called after validation
     * has passed, so invalid/empty submissions never consume a slot.
     */
    private function consumeRateLimits(StoreInquiryRequest $request): bool
    {
        $ipKey = 'inquiries:' . $request->ip();
        if (RateLimiter::tooManyAttempts($ipKey, 5)) {
            return false;
        }
        RateLimiter::hit($ipKey, 60);

        $emailKey = 'inquiries_email:' . strtolower($request->input('email'));
        if (RateLimiter::tooManyAttempts($emailKey, 5)) {
            return false;
        }
        RateLimiter::hit($emailKey, 3600);

        return true;
    }

    private function success(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! Your inquiry has been received. We\'ll get back to you within 24 hours.',
        ], 201);
    }
}
