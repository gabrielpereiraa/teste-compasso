<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $desc;
    public $type;
    public $icon;
    public $bclass;
    public $link;

    public function __construct(string $title, string $desc, string $type = '', string $icon = '', string $bclass = '', string $link = ''){
        $this->title = $title;
        $this->desc = $desc;
        $this->type = $type;
        $this->icon = $icon;
        $this->bclass= $bclass;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.card');
    }
}
