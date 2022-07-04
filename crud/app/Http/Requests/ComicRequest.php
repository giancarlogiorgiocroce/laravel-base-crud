<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            "title" => "required|max:100|min:5",
            "image" => "required|max:255",
            "type" => "required|max:20|min:2"
        ];
    }

    public function messages()
    {
        return [
            "title.required"=>"Questo campo è obbligatorio",
            "title.max"=>"Questo campo non può contenere più di :max caratteri",
            "title.min"=>"Questo campo non deve contenere meno di :min caratteri",

            "image.required"=>"Questo campo è obbligatorio",
            "image.max"=>"Questo campo non può contenere più di :max caratteri",

            "type.required"=>"Questo campo è obbligatorio",
            "type.max"=>"Questo campo non può contenere più di :max caratteri",
            "type.min"=>"Questo campo non deve contenere meno di :min caratteri",
        ];
    }
}
