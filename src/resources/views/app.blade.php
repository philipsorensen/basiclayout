@extends('layout.blank')

@section('canvas')
@include('layout.menu')

<div class="container mt-4">
	@include('layout.breadcrumbs')
	@yield('content')
</div>

@include('layout.footer')
@endsection