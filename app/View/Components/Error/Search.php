<?php

namespace App\View\Components\Error;

use Illuminate\View\Component;

class Search extends Component
{
    public $error;
    public $title;
    public $title2;

    public function __construct($error = "", $title = "", $title2 = ""){
        $this->error = $error;
        $this->title = $title;
        $this->title2 = $title2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.error.search');
    }
}
