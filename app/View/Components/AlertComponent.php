<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertComponent extends Component
{

    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert-component');
    }
}
