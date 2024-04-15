<form method="POST" action="{{ route('login') }}">
	@csrf

	<div class="row">
		<div class="col-12">
			<h1>{{ __('basiclayout::form.login') }}</h1>
			<x-status />
		</div>
		<x-formcomponents::input :name="__('basiclayout::form.email')" id="email" autocomplete="username" autofocus inputmode="email" />
		<x-formcomponents::password autocomplete="current-password" id="password" :name="__('basiclayout::form.password')" :placeholder="__('basiclayout::form.password.type')" required />
		<x-formcomponents::checkbox id="remember_me" :name="__('basiclayout::form.rememberme')" />
		<div class="col-sm-6 col-12 mb-3 mb-sm-0 pt-2">
			<a href="{{ route('password.request') }}">{{ __('basiclayout::form.forgottenpassword') }}?</a>
		</div>
		<x-formcomponents::button col="col-sm-6">
			{{ __('basiclayout::form.login') }}
		</x-formcomponents::button>
	</div>
</form>