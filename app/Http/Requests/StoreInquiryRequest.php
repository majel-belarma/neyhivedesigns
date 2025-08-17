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
            'full_name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'brand' => ['required','string','max:255'],
            'website' => ['required','url','max:255'],
            'services' => ['required','string','max:500'],
            'ideal_client' => ['required','string','max:500'],

            'pain_points' => ['nullable','array'],
            'pain_points.*' => ['string','max:255'],
            'pain_points_other' => ['nullable','string','max:255'],
            'frustration_details' => ['nullable','string'],

            'package' => ['required','string','max:255'],
            'timeline' => ['required','string','max:255'],
            'referral' => ['required','string','max:255'],

            'calendly' => ['nullable','array'],
        ];
    }
}
