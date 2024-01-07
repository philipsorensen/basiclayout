@props([
	'route',
])

<form action="{{ $route }}" method="post">
	@csrf

	<div class="row justify-content-center">
		<div class="col-lg-8 col-md-7 col-sm-9 col-12">
			<div class="row justify-content-center">
				<div class="col-12">
					<h1>Skift kodeord for din bruger</h1>
				</div>
				<x-formcomponents::password autocomplete="current-password" id="password" name="Indtast nuværende kodeord" />
				<x-formcomponents::password col="col-md-6" id="password1" name="Indtast ønskede kodeord" />
				<x-formcomponents::password col="col-md-6" id="password2" name="Gentag ønskede kodeord" />
				<x-formcomponents::button>Opdater kodeord</x-formcomponents::button>
			</div>
		</div>
	</div>
</form>