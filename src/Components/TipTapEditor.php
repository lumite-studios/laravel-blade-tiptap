<?php

namespace LumiteStudios\LaravelBladeTiptap\Components;

use Illuminate\View\Component;

class TipTapEditor extends Component
{
    /**
     * The content of the editor.
     * @var string|null
     */
    public ?string $content;

    /**
     * The extensions to use.
     * @var array
     */
    public array $extensions;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param array $extensions
     * @return void
     */
    public function __construct(?string $content = null, array $extensions = [])
    {
        $this->content = $content;
        $this->extensions = array_merge($extensions, ['starter-kit', 'extension-text-style']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('laravel-blade-tiptap::tiptap-editor');
    }
}
