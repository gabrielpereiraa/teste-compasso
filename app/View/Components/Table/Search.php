<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Search extends Component
{

    public $value;
    public $route;

    public function __construct($value = "", $route = "")
    {
        $this->value = $value;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.search');
    }
}
