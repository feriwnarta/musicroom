<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonInputPrimary extends Component
{

    public string $class;
    public string $classInput;
    public string $id;
    public string $placeHolder;

    /**
     * @param string $class
     * @param string $classInput
     * @param string $id
     * @param string $placeHolder
     */
    public function __construct(string $class = '', string $classInput = '', string $id = '', string $placeHolder = '')
    {
        $this->class = $class;
        $this->classInput = $classInput;
        $this->id = $id;
        $this->placeHolder = $placeHolder;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.button-input-primary');
    }
}
