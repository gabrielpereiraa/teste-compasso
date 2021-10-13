<?php

namespace App\View\Components\Error;

use Illuminate\View\Component;

class Error extends Component
{
    public $error;

    public function __construct($error = ""){
        $this->error = $error;
    }

    public function render()
    {
        return view('components.error.error');
    }
}
