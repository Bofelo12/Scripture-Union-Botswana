<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFileRequest extends FormRequest
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
            'doc.*' => 'required|mimes:docx,doc,pdf,ppt,xls,xlsx'
        ];
    }

    public function messages()
    {
        return [
            'doc.*.required' => 'You haven\'t chosen a file.',
            'doc.*.max' => 'Your file is too large, must be less than :max kb.',
            'doc.*.mimes' => 'We only accept :values.',
        ];
    }
}
