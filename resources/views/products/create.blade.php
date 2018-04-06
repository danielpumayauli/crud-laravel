@extends('layout')

@section('content')

<div class="col-sm-8">
	<h2>Nuevo producto
		<a href="{{route('products.index')}}" class="btn btn-outline-primary pull-rig">Listado</a>
	</h2>
	{!! Form::open($product,['route' => 'products.store']) !!}

		@include('products.fragments.form')
		
	{!! Form::close() !!}
</div>
<div class="col-sm-4">
	@include('products.fragments.aside')
</div>

@endsection