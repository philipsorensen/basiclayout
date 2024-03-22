<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<!-- Metadata -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	@if (View::hasSection('meta_title'))
		@if (strlen(View::getSection('meta_title')) <= 82)
			<title>@yield('meta_title') | {{ config('app.name') }}</title>
			<meta property="og:title" content="@yield('meta_title') | {{ config('app.name') }}" />
		@else
			<title>@yield('meta_title')</title>
			<meta property="og:title" content="@yield('meta_title')" />
		@endif
	@else
		<title>{{ config('app.name') }} | SLOGAN</title>
		<meta property="og:title" content="{{ config('app.name') }} | SLOGAN" />
	@endif
	<meta name="application-name" content="{{ config('app.name') }}" />
	<meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#000" />
    <meta name="description" content="@yield('meta_description')">
	<meta name="mobile-web-app-capable" content="yes" />
	<link rel="canonical" @if (View::hasSection('canonical')) href="@yield('canonical')" @else href="{{ Request::url() }}" @endif>
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:description" content="@yield('meta_description')">
	<meta property="og:image" @if(View::hasSection('og_image')) content="@yield('og_image')" @else content="" @endif>
	<meta property="og:locale" content="{{ config('app.locale') }}" />
	<meta property="og:type" content="website" />
    <meta name="robots" content="INDEX, FOLLOW">
	@yield('meta_extra')

	<!-- Styling -->
	@vite('resources/css/app.scss')
	@yield('css')
	<link rel="shortcut icon" type="image/png" href=""/>
</head>
<body>
	@yield('canvas')
	
	<!-- Scripts -->
	@vite('resources/js/app.js')
	@yield('scripts')
</body>
</html>