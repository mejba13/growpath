<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFollowUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create-follow-ups');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'prospect_id' => ['required', 'exists:prospects,id'],
            'type' => ['required', Rule::in(['call', 'email', 'meeting', 'demo', 'proposal', 'other'])],
            'subject' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'due_date' => ['required', 'date', 'after_or_equal:today'],
            'due_time' => ['nullable', 'date_format:H:i'],
            'priority' => ['required', Rule::in(['low', 'medium', 'high'])],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'prospect_id.required' => 'Please select a prospect for this follow-up.',
            'prospect_id.exists' => 'The selected prospect does not exist.',
            'subject.required' => 'Please provide a subject for this follow-up.',
            'due_date.required' => 'Please provide a due date.',
            'due_date.after_or_equal' => 'Due date must be today or in the future.',
        ];
    }
}
