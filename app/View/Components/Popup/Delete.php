<?php

namespace App\View\Components\Popup;

use Illuminate\View\Component;

class Delete extends Component
{
    public $module;
    public $id;

    public function __construct($id = "", $module = ""){
        $this->id = $id;
        $this->module = $module;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.popup.delete');
    }
}
