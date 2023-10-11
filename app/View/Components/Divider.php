<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Divider extends Component
{

    public $label, $spacing, $text, $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $spacing = '4', $text = 'sm', $color = 'gray-400')
    {
        $this->label = $label;
        $this->spacing = $spacing;
        $this->text = $text;
        $this->color = 'text-' . $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.divider')
            ->with('label', $this->label)
            ->with('spacing', $this->spacing)
            ->with('text', $this->text)
            ->with('color', $this->color);
    }
}