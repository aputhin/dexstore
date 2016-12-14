@extends('layout.master')

@section('content')
	<table class="table">
		<thead>
			<th></th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Abre</th>
			<th>Fecha</th>
		</thead>
		<tbody>
		@foreach ($list as $store)
			<tr>
				<td></td>
				<td>{{ $store['name'] }}</td>
				<td>{{ $store['description'] }}</td>
				<td>{{ Carbon\Carbon::parse($store['opens'])->format('H:i') }}</td>
				<td>{{ Carbon\Carbon::parse($store['closes'])->format('H:i') }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection