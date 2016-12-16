@extends('layout.master')

@section('content')
	<div class="form-horizontal" id="store-form">
        <div class="page-header">
            <h3>Editar Loja</h3>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="name">Nome</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="name" type="text" class="form-control" v-model="form.name" value="{{ $store->name }}">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="desc">Descrição</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="desc" type="text" class="form-control" v-model="form.desc" value="{{ $store->description }}">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="logo">Link para o logo</label>
        	</div>
        	<div class="col-sm-5">
            	<input id="logo" type="text" class="form-control" v-model="form.logo" value="{{ $store->logo_link }}">
            </div>
        </div>
        <div class="form-group">
        	<div class="col-sm-1">
        		<label for="opens">Abre às:</label>
        	</div>
        	<div class="col-sm-2">
            	<input id="opens" type="text" class="form-control time" v-model="form.opens" value="{{ $store->opens }}">
            </div>
        	<div class="col-sm-1">
        		<label for="closes">Fecha às:</label>
        	</div>
        	<div class="col-sm-2">
            	<input id="closes" type="text" class="form-control time" v-model="form.closes" value="{{ $store->closes }}">
            </div>
        </div>
    </div>
@endsection