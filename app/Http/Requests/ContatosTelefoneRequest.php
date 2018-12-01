<?php namespace contatos\Http\Requests;

use contatos\Http\Requests\Request;

class ContatosTelefoneRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_tipo_telefone' => 'numeric',
            'numero' => 'required|string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório',
        ];
    }
}