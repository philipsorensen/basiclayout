<form method="POST" action="{{ route('password.store') }}">
	@csrf

	<div class="row justify-content-center">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-12 mb-4">
					<h1>{{ __('basiclayout::form.resetyourpassword') }}</h1>
					<input type="hidden" name="token" value="{{ $request->route('token') }}">
				</div>

				<x-formcomponents::input id="email" :name="__('basiclayout::form.email')" required autofocus />
				<x-formcomponents::password col="col-md-6" :name="__('basiclayout::form.newpassword')" id="password" autocomplete="new-password" required />
				<x-formcomponents::password col="col-md-6" :name="__('basiclayout::form.repeatpassword')" id="password_confirmation" required />

				<x-formcomponents::button>{{ __('basiclayout::form.resetpassword') }}</x-formcomponents::button>
			</div>
		</div>
	</div>
</form>