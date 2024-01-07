<form method="POST" action="{{ route('password.email') }}">
	@csrf

	<div class="row justify-content-center">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-12 mb-4">
					<h1>Glemt dit kodeord?</h1>
					Intet problem. Vi fremsender et nulstillingslink til din e-mail, så du kan få adgang til din konto igen. 
				</div>

				<x-formcomponents::input col="col-sm-8" id="email" name="E-mail" required :value="old('email')" autofocus />
				<x-formcomponents::button col="col-sm-4 mt-4">Nulstil kodeord</x-formcomponents::button>
			</div>

			<x-status />
		</div>
	</div>
</form>