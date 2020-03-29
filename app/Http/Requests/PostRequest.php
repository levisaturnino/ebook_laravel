<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
	        'title'        => 'required',
	        'description' => 'required|min:20',
	        'content'     => 'required',
	        'thumb'       => 'image',
	        'categories'  => 'required'
        ];
    }

    public function messages()
    {
		return [
			'required' => 'Este campo é obritário',
			'min'      => 'Sua descrição deve ter pelo menos :min caracteres',
			'image'    => 'Imagem inválida'
		];
    }
}
