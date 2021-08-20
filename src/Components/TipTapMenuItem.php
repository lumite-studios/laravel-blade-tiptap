<?php

namespace LumiteStudios\LaravelBladeTiptap\Components;

use Illuminate\View\Component;

class TipTapMenuItem extends Component
{
	public string $action;
	public array $parameters;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $action, array $parameters = [])
    {
        $this->action = $action;
        $this->parameters = $parameters;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('laravel-blade-tiptap::tiptap-menu-item');
    }
}
