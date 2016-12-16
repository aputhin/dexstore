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
            	<input id="name" type="text" class="form-control" v-model="form.name">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="desc">Descrição</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="desc" type="text" class="form-control" v-model="form.desc">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="logo">Link para o logo</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="logo" type="text" class="form-control" v-model="form.logo">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="opens">Abre às:</label>
        	</div>
        	<div class="col-sm-2">
            	<input id="opens" type="time" class="form-control" v-model="form.opens">
            </div>
        	<div class="col-sm-1">
        		<label for="closes">Fecha às:</label>
        	</div>
        	<div class="col-sm-2">
            	<input id="closes" type="time" class="form-control" v-model="form.closes">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 text-right">
                <button type="submit" class="btn btn-default" v-on:click="save" title="Adicionar">
                    <span class="glyphicon glyphicon-plus text-success"> Adicionar</span>
                </button>
            </div>
        </div>
    </div>
@endsection
