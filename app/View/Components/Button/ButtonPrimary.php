<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonPrimary extends Component
{
    public string $class;
    public string $id;


    /**
     * Create a new component instance.
     */
    public function __construct(string $class = '', string $id = '')
    {
        $this->class = $class;
        $this->id = $id;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.button-primary');
    }
}
