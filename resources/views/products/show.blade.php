@extends('layout')

@section('content')

<div class="col-sm-8">
	<h2>Nombre de Producto: {{$product->name}}
		<a href="{{route('products.edit', [$product->id])}}" class="btn btn-outline-primary pull-rig">Editar</a>
	</h2>
	<h3>Descripción: {{$product->short}}</h3>
	<p>
		{{ $product->body }}
	</p>
</div>
<div class="col-sm-4">
	mensaje
</div>

@endsection