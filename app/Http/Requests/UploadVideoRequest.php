<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadVideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'video' => 'required|mimes:mp4, avi'
        ];
    }

    public function messages()
    {
        return [
            'video .required' => 'You haven\'t chosen a video.',
            'video .max' => 'Your video is too large, must be less than :max kb.',
            'video .mimes' => 'We only accept :values.',
        ];
    }
}
