<?php

namespace App\View\Components;

use App\Constants\ComponentConstant;
use App\Models\Element;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InformationComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $information = Element::query()
            ->where('component', ComponentConstant::STATS)
            ->first();

        return view('components.information-component', [
            'information' => $information->content,
        ]);
    }
}
