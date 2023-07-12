<!DOCTYPE html>
<html lang="da">
<head>
	<!-- Metadata -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	@if(View::hasSection('meta_title'))
		<title>@yield('meta_title') | {{ config('app.name') }}</title>
	@else
		<title>{{ config('app.name') }} | Subtitle</title>
	@endif
	<meta name="application-name" content="{{ config('app.name') }}" />
	<meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#000" />
    <meta name="description" content="@yield('meta_description')">
	<meta name="mobile-web-app-capable" content="yes" />
	<link rel="canonical" @if (View::hasSection('canonical')) href="@yield('canonical')" @else href="{{ Request::url() }}" @endif>
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:title" @if(View::hasSection('meta_title')) content="@yield('meta_title') | {{ config('app.name') }}" @else content="{{ config('app.name') }} | Subtitle" @endif>
	<meta property="og:description" content="@yield('meta_description')">
	<meta property="og:image" @if(View::hasSection('og_image')) content="@yield('og_image')" @else content="" @endif>
	<meta property="og:locale" content="da_DK" />
	<meta property="og:type" content="website" />
    <meta name="robots" content="INDEX, FOLLOW">
	@yield('meta_extra')

	<!-- Styling -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	@yield('css')
	<link rel="shortcut icon" type="image/png" href=""/>
</head>
<body>
	@include('layout.menu')

	<div class="container mt-4">
		@include('layout.breadcrumbs')
		@yield('content')
	</div>

	@include('layout.footer')

	<!-- Scripts -->
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
	@yield('scripts')
</body>
</html>