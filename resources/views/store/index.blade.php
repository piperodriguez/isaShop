@extends('layouts.template')
@section('content')


{{-- @include('layouts.slider') --}}


<div class="container text-center">
	<div id="products">
		 @forelse ($data['productos'] as $producto)
		 	<div class="product white-panel">
				<h3 color="black">{{$producto->name}}</h3>
				<img src="{{$producto->image}}" height="250" width="250">
				<div class="product-info panel">
					<p>{{$producto->extract}}</p>
					<p>Precio: ${{ number_format($producto->price, 2) }}</p>
					<p>
						<a class="btn btn-warning" href="#"><i class="fas fa-cart-plus"></i></a>
						<a class="btn btn-danger" href="{{ route('product-detail', $producto->slug) }}">
							<i class="fas fa-chevron-circle-right"></i>
						</a>
					</p>
				</div>
		 	</div>
		@empty
		    <p>No se encuentran resultados</p>
		@endforelse
	</div>
</div>
<script type="text/javascript" src="{{ asset('js/listProductos.js') }}"></script>
@endsection