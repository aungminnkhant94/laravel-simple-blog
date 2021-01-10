<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeArticleRequest extends FormRequest
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
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
            //
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'A title is mainly required',
            'body.required' => 'A body need to be required',
            'category_id.required' => 'Choose one category'
        ];
    }
}
