<?php namespace contatos;

use Illuminate\Database\Eloquent\Model;

class TipoTelefone extends Model {

    protected $table = 'tipo_telefone';
    public $timestamps = false;

    public function produtos(){
        return $this->hasMany('contatos\ContatoTelefone');
    }

}
