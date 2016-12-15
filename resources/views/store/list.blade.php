@extends('layout.master')

@section('content')
	<table class="table">
		<thead>
			<th></th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Abre</th>
			<th>Fecha</th>
			<th></th>
		</thead>
		<tbody>
		@foreach ($list as $store)
			<tr>
				<td><img src="{{ $store['logo_link'] }}" class="list-logo"/></td>
				<td>{{ $store['name'] }}</td>
				<td>{{ $store['description'] }}</td>
				<td>{{ Carbon\Carbon::parse($store['opens'])->format('H:i') }}</td>
				<td>{{ Carbon\Carbon::parse($store['closes'])->format('H:i') }}</td>
				<td>
					@if ($admin)
						<a href="{{ url('get/'.$store['id']) }}"><button type="button" title="Editar" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
						<a href="{{ url('rm/'.$store['id']) }}"><button type="button" title="Remover" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>
					@endif
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection