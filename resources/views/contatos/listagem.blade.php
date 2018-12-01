@extends('layout.principal')

@section('conteudo')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Contatos</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Digite o que você deseja">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lista de contatos cadastrados</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a href="/contatos/form"
                               class="btn btn-round btn-primary">
                                <i class="fa fa-plus"></i>
                                Novo
                            </a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="table_motoboys" class="table table-striped table-responsive">
                            <thead>

                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Linkedin</th>
                                <th>Facebook</th>
                                <th>Ações</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach ($contatos as $contato)
                                <tr>
                                    <td>{{$contato->id}}</td>
                                    <td>{{ $contato->nome}}</td>
                                    <td>{{ $contato->email }}</td>
                                    <td>{{ $contato->link_linkedin or '-' }}</td>
                                    <td>{{ $contato->link_facebook or '-' }}</td>
                                    <td>
                                        <a href="{{action('ContatoController@listarPorId', $contato->id)}}">
                                            <i data-id-contato="{{ $contato->id }}"
                                               class="btn btn-sm btn-success fa fa-pencil editar"></i>
                                        </a>
                                        <a>
                                            <i data-id-contato="{{ $contato->id}}"
                                               class="btn btn-danger btn-sm fa fa-remove remover"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="/js/contatos/contato-modulo.js"></script>
    <script src="/js/contatos/contato-form-busca.js"></script>
@stop