@extends('layout')

@section('content')

<div class="col-sm-8">
	<h2>Listado de Productos
	<a href="{{route('products.create')}}" class="btn btn-primary pull-right">Agregar Nuevo</a>
	</h2>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">ID</th>
				<th>Nombre del producto</th>
				<th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>
					<strong>
						{{$product->name}}
					</strong>
					{{$product->short}}
				</td>
				<td><a href="{{route('products.show', [$product->id])}}">Ver</a></td>
				<td>editar</td>
				<td>borrar</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$products->links()}}
</div>
<div class="col-sm-4">
	hola mundo
</div>

@endsection