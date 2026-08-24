<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerSubmissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'organization_name' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'partnership_type' => 'required|string',
            'location' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }
}
