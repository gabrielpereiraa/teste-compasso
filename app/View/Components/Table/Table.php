<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    public $table;
    public $results;
    public $module;
    public $type;
    public $title;
    public $title2;
    public $foot;

    public function __construct($table = [], $results = [], $module='', $type = '1', $title = '', $title2 = '', $foot = 1){
        $this->table = $table;
        $this->results = $results;
        $this->module = $module;
        $this->type = $type;
        $this->title = $title;
        $this->title2 = $title2;
        $this->foot = $foot;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table');
    }
}
