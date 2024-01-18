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
		$this->loadViewsFrom(__DIR__.'/../resources', 'basiclayout');

		$this->publishes([
			__DIR__.'/../resources/layout' => resource_path('layout'),
		], 'layout-assets');
	}
}