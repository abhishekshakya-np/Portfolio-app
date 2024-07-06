<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconLink extends Component
{
    public $href;
    public $icon;
    /**
     * Create a new component instance.
     *
     */
    public function __construct($href, $icon)
    {
        $this->href = $href;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon-link');
    }
}
