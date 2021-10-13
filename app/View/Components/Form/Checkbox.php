<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $desc;
    public $field;
    public $value;
    public $checked;
    public $class;


    public function __construct($desc, $field, $value, $checked = "", $class = ""){
        $this->desc = $desc;
        $this->field = $field;
        $this->value = $value;
        $this->checked = $checked;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.checkbox');
    }
}
