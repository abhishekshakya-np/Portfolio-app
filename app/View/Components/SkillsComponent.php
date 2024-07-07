<?php

namespace App\View\Components;

use App\Constants\ComponentConstant;
use App\Models\Element;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillsComponent extends Component
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
        $skills = Element::query()
            ->where('component', ComponentConstant::SKILLS)
            ->first();

             return view('components.skills-component', [
            'skills' => $skills->content,
        ]);
    }
}
