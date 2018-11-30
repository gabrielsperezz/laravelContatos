<?php namespace contatos;

use Illuminate\Database\Eloquent\Model;

class ContatoTelefone extends Model {

    protected $table = 'contato_telefone';
    public $timestamps = false;

    protected $fillable = ['numero', 'tipo'];

    public function tipo(){
        return $this->belongsTo('contatos\TipoTelefone');
    }

    public function contatos(){
        return $this->belongsTo('contatos\Contato');
    }
}