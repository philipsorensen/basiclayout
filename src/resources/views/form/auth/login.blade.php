<form method="POST" action="{{ route('login') }}">
	@csrf

	<div class="row">
		<div class="col-12">
			<h1>Log ind</h1>
			<x-status />
		</div>
		<x-formcomponents::input name="E-mail" id="email" autocomplete="username" autofocus inputmode="email" />
		<x-formcomponents::password autocomplete="current-password" id="password" name="Kodeord" placeholder="Indtast dit kodeord" required />
		<x-formcomponents::checkbox id="remember_me" name="Husk mig" />
		<div class="col-sm-8 col-12 mb-3 mb-sm-0 pt-2">
			<a href="{{ route('password.request') }}">Glemt kodeord?</a>
		</div>
		<x-formcomponents::button col="col-sm-4">
			Log ind
		</x-formcomponents::button>
	</div>
</form>