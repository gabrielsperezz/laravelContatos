<?php namespace contatos;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {


    protected $table = 'contatos';
    public $timestamps = false;

    protected $fillable = ['nome', 'email', 'link_linkedin', 'link_facebook'];

    public function contatoTelefone(){
        return $this->hasMany('contatos\ContatoTelefone');
    }

}
