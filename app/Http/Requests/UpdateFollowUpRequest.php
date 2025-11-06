<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFollowUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('update', $this->route('follow_up'));
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
            'due_date' => ['required', 'date'],
            'due_time' => ['nullable', 'date_format:H:i'],
            'priority' => ['required', Rule::in(['low', 'medium', 'high'])],
            'status' => ['required', Rule::in(['pending', 'completed', 'cancelled'])],
            'outcome_notes' => ['nullable', 'string'],
            'redirect_to' => ['nullable', 'string'],
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
            'prospect_id.required' => 'Please select a prospect for this follow-up.',
            'prospect_id.exists' => 'The selected prospect does not exist.',
            'subject.required' => 'Please provide a subject for this follow-up.',
            'due_date.required' => 'Please provide a due date.',
        ];
    }
}
