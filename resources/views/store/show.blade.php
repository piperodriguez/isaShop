@extends('layouts.template')
@section('content')
	<div class="container text-center" id="detalleProducto">
		<div class="page-header">
			<h1><i class="fas fa-shopping-cart"></i> Detalle del producto</h1>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="product-block">
					<img src="{{$data['producto']->image}}" height="250" width="250">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="product-block">
					<h3>{{ $data['producto']->name }}</h3>
					<div class="product-info panel">
						<p>{{ $data['producto']->description}}</p>
						<h4>
							<span class="label label-success">
								Precio: ${{ number_format($data['producto']->price, 2) }}
							</span>
						</h4>
						<p>
							<a class="btn btn-warning" href="#">Lo quiero <i class="fas fa-cart-plus fa-2x"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<p color="white"><a class="btn btn-dark" href="{{ route('home') }}"><i class="fas fa-chevron-circle-left"></i> Regresar</a></p>
	</div>
@endsection