<?php

namespace App\View\Components\Tag;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TagItem extends Component
{
    public $tag;
    /**
     * Create a new component instance.
     */
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tag.tag-item');
    }
}
