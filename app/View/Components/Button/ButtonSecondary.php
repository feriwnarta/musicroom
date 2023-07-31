<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonSecondary extends Component
{
    public string $class;
    public string $id;

    /**
     * Create a new component instance.
     */
    public function __construct(String $class = '', String $id = '')
    {
        $this->class = $class;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.button-secondary');
    }
}
