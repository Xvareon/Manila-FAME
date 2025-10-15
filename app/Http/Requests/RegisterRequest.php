<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|alpha_num|unique:users,username',
            'password' => 'required|min:8|confirmed',
            'participation_type' => 'required|in:Buyer,Exhibitor,Visitor',

            'company.name' => 'required|string|max:255',
            'company.address_line' => 'required|string|max:255',
            'company.city' => 'required|string|max:255',
            'company.region' => 'required|string|max:255',
            'company.country' => 'required|string|max:255',
            'company.year_established' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'company.website' => 'nullable|url',
            'company.brochure' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            // Account info
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'username.required' => 'Please choose a username.',
            'username.alpha_num' => 'The username can only contain letters and numbers.',
            'username.unique' => 'This username is already taken.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Your password must be at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
            'participation_type.required' => 'Please select a participation type.',

            // Company info
            'company.name.required' => 'Please enter your company name.',
            'company.address_line.required' => 'Please provide the company address.',
            'company.city.required' => 'Please provide the city.',
            'company.region.required' => 'Please provide the region or province.',
            'company.country.required' => 'Please select the company’s country.',
            'company.year_established.required' => 'Please provide the year the company was established.',
            'company.year_established.digits' => 'The year established must be a 4-digit year.',
            'company.year_established.min' => 'The year established cannot be before 1900.',
            'company.year_established.max' => 'The year established cannot be in the future.',
            'company.website.url' => 'Please enter a valid company website URL (e.g., https://example.com).',
            'company.brochure.mimes' => 'The brochure must be a PDF, DOC, or DOCX file.',
            'company.brochure.max' => 'The brochure file must not exceed 2MB.',
        ];
    }
}
