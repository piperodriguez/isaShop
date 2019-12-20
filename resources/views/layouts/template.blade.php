<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title', 'IsaShop')</title>
</head>
<body>

	@include('layouts.nav')

	@yield('content')

	@include('layouts.footer')

</body>
</html>