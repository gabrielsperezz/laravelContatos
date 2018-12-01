@extends('layout.principal')

@section('conteudo')
<div class="">
	<div class="row top_tiles">
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-phone"></i></div>
				<div class="count">{{ $total_telefone_contatos }}</div>
				<h3>Telefones de Contatos</h3>
				<p>Total de telefones cadastrados</p>
			</div>
		</div>
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-users"></i></div>
				<div class="count">{{ $total_contatos }}</div>
				<h3>Contatos</h3>
				<p>Total de contatos cadastradas.</p>
			</div>
		</div>
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-user"></i></div>
				<div class="count">{{ $total_logins }}</div>
				<h3>Logins</h3>
				<p>Total de Usúarios cadastrados.</p>
			</div>
		</div>
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="tile-stats">
				<div class="icon"><i class="fa  fa-tags"></i></div>
				<div class="count">{{ $total_tipo}}</div>
				<h3>Tipo de telefone</h3>
				<p>Total de tipo de telefones cadastrados.</p>
			</div>
		</div>
	</div>
</div>
@stop
