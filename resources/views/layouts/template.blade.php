<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title', 'IsaShop')</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/librerias/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/librerias/webfonts/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/librerias/toastr.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/mytheme.css') }}">
	<script type="text/javascript" src="{{ asset('js/librerias/jquery-3.4.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/librerias/popper.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/librerias/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/librerias/pinterest_grid.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/librerias/toastr.min.js') }}"></script>
</head>
<body>

	@include('layouts.nav')

	@yield('content')

	@include('layouts.footer')

</body>
</html>