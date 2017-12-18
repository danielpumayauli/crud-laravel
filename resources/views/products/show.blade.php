@extends('layout')

@section('content')

<div class="col-sm-8">
	<h2>Nombre de Producto: {{$product->name}}
	</h2>
	<h3>Descripción: {{$product->short}}</h3>
	<p>
		{!! $product->body !!}
	</p>
</div>
<div class="col-sm-4">
	mensaje
</div>

@endsection