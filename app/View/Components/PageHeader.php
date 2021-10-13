<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{

    public $title;
    public $desc;
    public $type;
    public $icon;
    public $link;

    public function __construct(string $title, string $desc, string $icon = '', string $type = '', string $link = ''){
        $this->title = $title;
        $this->desc = $desc;
        $this->icon = $icon;
        $this->type = $type;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.page-header');
    }
}
