<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutUsRequest extends FormRequest
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
            'image1' => 'required|image',
            'aboutus_title1' => 'required|string|max:255',
            'aboutus_desc1' => 'required|string',
            'mission_desc' => 'required|string',
            'vision_desc' => 'required|string',
            'goal_desc' => 'required|string',
            'image2' => 'required|image',
            'aboutus_title2' => 'required|string|max:255',
            'aboutus_desc2' => 'required|string',
        ];
    }
}
