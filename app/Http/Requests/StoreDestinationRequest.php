<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'destination_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'destination_name.required' => 'Destination name is required.',
            'country.required' => 'Country is required.',
            'city.required' => 'City is required.',
            'image.image' => 'File must be an image.',
            'image.mimes' => 'Image must be a type of jpeg, png, jpg, gif, svg.',
            'image.max' => 'Image size must not exceed 2MB.',
        ];
    }
}
