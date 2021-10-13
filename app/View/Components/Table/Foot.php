<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Foot extends Component
{
    public $table;
    public $results;
    public $type;

    public function __construct($table = [], $results = [], $type = '1'){
        $this->table = $table;
        $this->results = $results;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.foot');
    }
}
