<h1>Listado de productos</h1>

@forelse ($data['productos'] as $producto)
	<h3>{{$producto->name}}</h3>
	<img src="{{$producto->image}}">
@empty
    <p>No se encuentran resultados</p>
@endforelse