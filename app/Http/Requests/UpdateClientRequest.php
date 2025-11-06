<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('update', $this->route('client'));
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // Convert comma-separated services to array if it's a string
        if ($this->has('services_purchased') && is_string($this->services_purchased)) {
            $services = array_map('trim', explode(',', $this->services_purchased));
            $services = array_filter($services); // Remove empty values
            $this->merge([
                'services_purchased' => $services,
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string', 'max:255'],
            'industry' => ['nullable', 'string', 'max:255'],
            'company_size' => ['nullable', Rule::in(['1-10', '11-50', '51-200', '201-500', '501-1000', '1001+'])],
            'contract_start_date' => ['nullable', 'date'],
            'contract_end_date' => ['nullable', 'date', 'after_or_equal:contract_start_date'],
            'contract_value' => ['nullable', 'numeric', 'min:0'],
            'payment_status' => ['required', Rule::in(['current', 'overdue', 'cancelled'])],
            'account_health_score' => ['nullable', 'integer', 'min:0', 'max:100'],
            'renewal_date' => ['nullable', 'date'],
            'services_purchased' => ['nullable', 'array'],
            'services_purchased.*' => ['string', 'max:255'],
            'notes' => ['nullable', 'string'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'contract_end_date.after_or_equal' => 'The contract end date must be after or equal to the start date.',
            'account_health_score.min' => 'The account health score must be between 0 and 100.',
            'account_health_score.max' => 'The account health score must be between 0 and 100.',
        ];
    }
}
