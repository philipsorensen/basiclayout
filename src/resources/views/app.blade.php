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
    <meta name="description" content="@yield('meta_description')">
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