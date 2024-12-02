<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputfield extends Component
{
    public $type;
    public $placeholder;
    public $name;
    public $number;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$placeholder,$name,$number=null)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->name= $name;
        $this->number= $number;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputfield');
    }
}
