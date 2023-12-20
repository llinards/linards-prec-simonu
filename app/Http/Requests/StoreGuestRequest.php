<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255', 'alpha'],
            'last_name' => ['required', 'string', 'max:255', 'alpha'],
            'phone_number' => ['required', 'max:255', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8'],
            'is_staying' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'Vārds ir obligāts',
            'first_name.string' => 'Vārds drīkst sastāvēt tikai no burtiem',
            'first_name.max' => 'Vārds ir aizdomīgi garš',
            'first_name.alpha' => 'Vārds drīkst sastāvēt tikai no burtiem',
            'last_name.required' => 'Uzvārds ir obligāts',
            'last_name.string' => 'Uzvārds drīkst sastāvēt tikai no burtiem',
            'last_name.max' => 'Uzvārds ir aizdomīgi garš',
            'last_name.alpha' => 'Uzvārds drīkst sastāvēt tikai no burtiem',
            'phone_number.required' => 'Telefona numurs ir obligāts',
            'phone_number.regex' => 'Telefona numurs drīkst sastāvēt tikai no cipariem',
            'phone_number.max' => 'Telefona numurs ir aizdomīgi garš',
            'phone_number.min' => 'Telefona numurs nedrīkst būt īsāks par 8 cipariem',
            'is_staying.required' => 'Lūdzu norādiet, vai paliksiet naktsmītnē',
        ];
    }
}
