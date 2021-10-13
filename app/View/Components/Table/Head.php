<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Head extends Component
{
    public $table;
    public $results;
    public $module;
    public $type;

    public function __construct($table = [], $results = [], $module = '', $type = '1'){
        $this->table = $table;
        $this->results = $results;
        $this->module = $module;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.head');
    }
}
