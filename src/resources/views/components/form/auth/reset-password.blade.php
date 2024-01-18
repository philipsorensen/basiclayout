@extends('layout.app')
@section('meta_title', 'Glemt kodeord')

@section('content')
<form method="POST" action="{{ route('password.store') }}">
	@csrf

	<div class="row justify-content-center">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-12 mb-4">
					<h1>Nulstil dit kodeord</h1>
					<input type="hidden" name="token" value="{{ $request->route('token') }}">
				</div>

				<x-formcomponents::input id="email" name="E-mail" required autofocus />
				<x-formcomponents::password col="col-md-6" name="Nyt kodeord" id="password" autocomplete="new-password" required />
				<x-formcomponents::password col="col-md-6" name="Gentag kodeord" id="password_confirmation" required />

				<x-formcomponents::button>Nulstil kodeord</x-formcomponents::button>
			</div>
		</div>
	</div>
</form>
@endsection