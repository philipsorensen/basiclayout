@props([
	'route',
])

<form action="{{ $route }}" enctype="multipart/form-data" method="post">
	@csrf

	<div class="row justify-content-center">
		<div class="col-lg-8 col-md-7 col-sm-9 col-12">
			<div class="row justify-content-center">
				<div class="col-12">
					<h1>Rediger din bruger</h1>
				</div>

				<div class="col-sm-6 mb-4">
					<img alt="{{ $user->name }}" class="img-fluid rounded-8" src="{{ asset($user->getAvatar()) }}" title="{{ $user->name }}">
				</div>

				<div class="col-sm-6">
					<x-formcomponents::input name="Navn" id="name" col="col-12" :value="old('name', $user->name)" />
					<x-formcomponents::input name="E-mail" id="email" col="col-12" :value="old('email', $user->email)" />
					<x-formcomponents::image name="Vælg billede (hvis du vil erstatte)" />

					<x-formcomponents::button>Opdater</x-formcomponents::button>
				</div>
			</div>
		</div>
	</div>
</form>