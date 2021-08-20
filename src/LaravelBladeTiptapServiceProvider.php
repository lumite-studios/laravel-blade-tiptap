<?php
namespace LumiteStudios\LaravelBladeTiptap;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use LumiteStudios\LaravelBladeTiptap\Components\TipTapMenu;
use LumiteStudios\LaravelBladeTiptap\Components\TipTapEditor;
use LumiteStudios\LaravelBladeTiptap\Components\TipTapMenuItem;

class LaravelBladeTiptapServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-blade-tiptap');

		Blade::component('tiptap-menu-item', TipTapMenuItem::class);
		Blade::component('tiptap-menu', TipTapMenu::class);
		Blade::component('tiptap-editor', TipTapEditor::class);

		$this->publishes([
			__DIR__.'/../resources/views' => resource_path('views/vendor/laravel-blade-tiptap'),
		]);
        $this->publishes([__DIR__.'/../resources/dist' => public_path('vendor/laravel-blade-tiptap')], 'laravel-blade-tiptap');
	}
}
