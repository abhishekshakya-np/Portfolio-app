<?php

namespace App\View\Components;

use App\Constants\ComponentConstant;
use App\Models\Element;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutMeComponent extends Component
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
        // This code is equivalent to the commented out code below it, but it uses the query builder
      // instead of the query method
        $homeElement = Element::where('component', ComponentConstant::HOME)->first();
        $aboutMeContent = $homeElement->content;
        return view('components.about-me-component', [
            'aboutMeContent' => $aboutMeContent,


//        This code uses the ORM to get the first element where the component is Home.
//        It then retrieves the content of that element and passes it to the view.
//        The difference is that the first code uses the query builder, while the second uses the ORM.
//        $aboutme = Element::query()->where('component', ComponentConstant::HOME)->first();
//        return view('components.about-me-component',[
//       'aboutme' => $aboutme->content,

        ]);
    }
}
