@extends('layout.principal')

@section('conteudo')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Contato </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab_dados_basicos" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Dados básicos</a>
                                </li>
                                <li role="presentation"  @if (!isset($contato->id)) style="display: none;" @endif>
                                    <a href="#tab_telefones" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Veiculos</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_dados_basicos" aria-labelledby="home-tab">
                                    <form id="form_contato" class="form-horizontal form-label-left" novalidate>
                                        <input type="hidden" id="id_contato" name="id_contato" value="{{ $contato->id or '0' }}">
                                        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Nome</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="contato_nome" class="form-control col-md-7 col-xs-12" value="{{ $contato->nome or "" }}" name="contato_nome" placeholder="Nome" required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Email</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="contato_email" class="form-control col-md-7 col-xs-12" value="{{ $contato->email or "" }}" name="contato_email" placeholder="Email" required="required" type="email">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Link linkedin</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="contato_link_linkedin" class="form-control col-md-7 col-xs-12" value="{{ $contato->link_linkedin or "" }}" name="contato_link_linkedin" placeholder="Link linkedin" required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Link Facebook</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="contato_link_facebook" class="form-control col-md-7 col-xs-12" value="{{ $contato->link_facebook or "" }}" name="contato_link_facebook" placeholder="Link Facebook" required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button id="salvar" type="submit" class="btn btn-success">Salvar
                                                </button>
                                                <a href="{{action('ContatoController@listarContatos')}}" class="btn btn-primary" >Cancelar</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_telefones" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-sm-5">

                                            <form id="form_contato_telefone" class="form-horizontal form-label-left" novalidate>
                                                <div class="item form-group">
                                                    <input type="hidden" id="id_telefone" name="id_telefone" value="0">
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3 col-xs-4" for="titulo">Tipo</label>
                                                    <div class="col-log-10 col-md-9 col-sm-9 col-xs-8">
                                                        <select id="telefone_tipo" name="telefone_tipo" class="form-control">
                                                            @foreach ($tipos_telefones as $tipo)
                                                            <option value="{{ $tipo->id }}"> {{ $tipo->descricao }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3 col-xs-4" for="titulo">Número</label>
                                                    <div class="col-log-10 col-md-9 col-sm-9 col-xs-8">
                                                        <input id="telefone_numero" class="form-control col-md-7 col-xs-12" value="{{ $contato->login or "" }}" name="telefone_numero" placeholder="Número" required="required" type="text">
                                                    </div>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <button id="salvar_telefone" type="submit" class="btn btn-success">
                                                            Salvar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Lista de telefones contato</h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <table id="table_contato_telefones" class="table table-striped table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Tipo</th>
                                                            <th>Número</th>
                                                            <th>Ações</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script> var idContato = "{{$contato->id or '0'}}";</script>
    <script src="/js/contatos/contato-modulo.js"></script>
    <script src="/js/contatos/contato-view.js"></script>
    <script src="/js/contatos/contato.js"></script>
@stop