<form method="POST" action="{{ route('password.email') }}">
	@csrf

	<div class="row justify-content-center">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-12 mb-4">
					<h1>{{ __('basiclayout::form.forgottenyourpassword') }}?</h1>
					{{ __('basiclayout::form.forgottenpassword.text') }}
				</div>

				<x-formcomponents::input col="col-sm-8" id="email" name="E-mail" required :value="old('email')" autofocus />
				<x-formcomponents::button col="col-sm-4 mt-4">{{ __('basiclayout::form.resetpassword') }}</x-formcomponents::button>
			</div>

			<x-formcomponents::status />
		</div>
	</div>
</form>