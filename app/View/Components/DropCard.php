<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropCard extends Component
{

    public $title;
    public $desc;

    public function __construct(string $title = 'teste', string $desc = 'default'){
        $this->title = $title;
        $this->desc = $desc;
    }

    public function render(){
        return view('components.drop-card');
    }
}
