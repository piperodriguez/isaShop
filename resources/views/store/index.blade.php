@extends('layouts.template')
@section('content')
	<h1>Listado de productos</h1>
	<div class="products">
		 @forelse ($data['productos'] as $producto)
		 	<div class="product">
				<h3>{{$producto->name}}</h3>
				<img src="{{$producto->image}}" height="250" width="250">
				<div class="product-info">
					<p>{{$producto->extract}}</p>
					<p>Precio: ${{ number_format($producto->price, 2) }}</p>
					<p>
						<a href="#">La Quiero</a>
						<a href="{{ route('product-detail', $producto->slug) }}">Leer más</a>
					</p>
				</div>
		 	</div>
		@empty
		    <p>No se encuentran resultados</p>
		@endforelse
	</div>
@endsection