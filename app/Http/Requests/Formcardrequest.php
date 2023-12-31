<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Formcardrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'photo'=>'max:2048|mimes:png,jpg,jpeg',
           'logo'=>'max:2048|mimes:png,jpg,jpeg',
           'full_name'=>'required',
           'doc'=>'nullable|mimes:pdf|max:10240'
        ];
    }
}
