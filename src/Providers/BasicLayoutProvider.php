<?php

namespace PhilipSorensen\BasicLayout\Providers;

use Illuminate\Support\ServiceProvider;

class BasicLayoutProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->loadTranslationsFrom(__DIR__.'/../lang', 'basiclayout');
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'basiclayout');
		$this->publishes([
			__DIR__.'/../resources/views/layout' => resource_path('views/layout'),
		], 'layout-assets');
	}
}