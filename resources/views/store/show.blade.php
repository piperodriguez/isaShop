@extends('layouts.template')
@section('content')

	<h1>Detalle del producto</h1>
	<div class="product-block">
		<img src="{{$data['producto']->image}}" height="250" width="250">
	</div>
	<div class="product-block">
		<h3>{{ $data['producto']->name }}</h3>
		<div class="product-info">
			<p>{{ $data['producto']->description}}</p>
			<p>Precio: ${{ number_format($data['producto']->price, 2) }}</p>
			<p>
				<a href="#">Lo quiero</a>
			</p>
		</div>
	</div>
	<p><a href="{{ route('home') }}">Regresar</a></p>
@endsection