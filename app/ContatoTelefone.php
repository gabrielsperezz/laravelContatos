<?php namespace contatos;

use Illuminate\Database\Eloquent\Model;

class ContatoTelefone extends Model {

    protected $table = 'contato_telefone';
    public $timestamps = false;
    protected $fillable = ['numero', 'id_tipo_telefone', 'id_contato'];

    public function tipo(){
        return $this->belongsTo('contatos\TipoTelefone', 'id_tipo_telefone' );
    }

    public function contatos(){
        return $this->belongsTo('contatos\Contato');
    }
}