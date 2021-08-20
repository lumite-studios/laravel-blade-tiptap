<?php
namespace LumiteStudios\LaravelBladeTiptap;

use Illuminate\Support\Facades\Blade;

class LaravelBladeTiptapServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-blade-tiptap');
		$this->publishes([
			__DIR__.'/../resources/views' => resource_path('views/vendor/laravel-blade-tiptap'),
		]);

		Blade::component('laravel-blade-tiptap::tiptap', 'tiptap-editor');
	}
}
