<?php namespace contatos;

use Illuminate\Database\Eloquent\Model;

class TipoTelefone extends Model {

    public $timestamps = false;

    public function contatosTelefone(){
        return $this->hasMany('contatos\ContatoTelefone');
    }

}
