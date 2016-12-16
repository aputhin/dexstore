@extends('layout.master')

@section('content')
	<div class="form-horizontal" id="store-form">
        <div class="page-header">
            <h3>Editar Loja</h3>
        </div>
        <input id="storeid" type="hidden" value="{{ $store->id }}" />
        <input id="storename" type="hidden" value="{{ $store->name }}" />
        <input id="storedesc" type="hidden" value="{{ $store->desc }}" />
        <input id="storelogo" type="hidden" value="{{ $store->logo }}" />
        <input id="storeopens" type="hidden" value="{{ $store->opens }}" />
        <input id="storecloses" type="hidden" value="{{ $store->closes }}" />
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
                <button type="submit" class="btn btn-default" v-on:click="save" title="Atualizar" :disabled="!valid">
                    <span class="glyphicon glyphicon-ok text-success"> Atualizar</span>
                </button>
            </div>
        </div>
    </div>
@endsection
