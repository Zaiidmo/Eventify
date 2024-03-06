<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
        'title' => 'required|string|max:255',
        'description' => 'required|string|min:25',
        'date' => 'required|date',
        'location' => 'required|string',
        'image' => 'nullable|string',
        'capacity' => 'required|integer|min:0',
        'ticket_price' => 'required|numeric|min:0',
        'mode' => 'required|in:auto,manual',
        'category_id' => 'required|',
    ];
}
}
