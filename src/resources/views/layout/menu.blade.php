<nav class="navbar navbar-expand-md navbar-light bg-transparent">
	<div class="container">
		<a class="navbar-brand fw-bold text-green-dark" href="{{ route('frontpage') }}" title="{{ config('app.name') }}">
			<img src="" alt="{{ config('app.name') }}" width="73.2" height="30" class="d-inline-block align-text-top">
			{{ config('app.name') }}
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			</ul>
			<ul class="navbar-nav ms-auto">
				@auth
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
					</li>
				@endauth
				@guest
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>