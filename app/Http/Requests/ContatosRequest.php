<?php namespace contatos\Http\Requests;

use contatos\Http\Requests\Request;

class ContatosRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'email' => 'required|max:100',
            'link_linkedin' => 'optional|max:100',
            'link_facebook' => 'optional|max:100'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório',
        ];
    }
}