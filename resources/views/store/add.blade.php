@extends('layout.master')

@section('content')
	<div class="form-horizontal" id="store-form">
        <div class="page-header">
            <h3>Adicionar Loja</h3>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="name">Nome</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="name" type="text" class="form-control" v-model="name"">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="desc">Descrição</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="desc" type="text" class="form-control" v-model="desc"">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="logo">Link para o logo</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="logo" type="text" class="form-control" v-model="logo"">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="opens">Abre às:</label>
        	</div>
        	<div class="col-sm-2">
            	<input id="opens" type="text" class="form-control" v-model="opens"">
            </div>
        	<div class="col-sm-1">
        		<label for="closes">Fecha às:</label>
        	</div>
        	<div class="col-sm-2">
            	<input id="closes" type="text" class="form-control" v-model="nome"">
            </div>
        </div>
    </div>
@endsection