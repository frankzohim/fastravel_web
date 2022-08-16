<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Travel extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'travel_name' => ['required', 'string', 'max:100'],
            'Type' => ['required', 'string', 'max:1950'],
            'starting_point' => ['required', 'string', 'max:20'],
            'arrival_point' => ['required', 'string', 'max:20'],
            'distance' => ['required', 'float', 'max:4'],
            'description' => ['required', 'string', 'max:500'],
        ];
    }
}
