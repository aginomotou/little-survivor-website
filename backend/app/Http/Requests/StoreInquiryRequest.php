<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:100', 'regex:/^[\p{L}\p{M}\'.\- ]+$/u'],
            'last_name' => ['required', 'string', 'max:100', 'regex:/^[\p{L}\p{M}\'.\- ]+$/u'],
            'email' => ['required', 'email', 'max:255'],
            'topic' => ['required', 'string', 'in:rates,activities,group,special,other'],
            'message' => ['required', 'string', 'max:1000'],
        ];
    }

    /**
     * Get custom validation messages for the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'Please provide your first name.',
            'last_name.required' => 'Please provide your last name.',
            'first_name.regex' => 'Names may only contain letters, spaces, apostrophes, hyphens, and periods.',
            'last_name.regex' => 'Names may only contain letters, spaces, apostrophes, hyphens, and periods.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'topic.required' => 'Please select a topic.',
            'topic.in' => 'Please select a valid topic.',
            'message.required' => 'Please write your message.',
            'message.max' => 'Your message may not exceed 1000 characters.',
        ];
    }
}
