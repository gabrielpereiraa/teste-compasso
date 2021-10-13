<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{

    public $title;
    public $subtitle;
    public $style;
    public $field;
    public $value;
    public $array;
    public $required;
    public $class;
    public $type;

    public function __construct($style="1", $title, $subtitle = '', $field, $value = '', $array = [], $required = 0, $class="", $type = "")
    {
        $this->title = $title;
        $this->style = $style;
        $this->subtitle = $subtitle;
        $this->field = $field;
        $this->value = $value;
        $this->array = $array;
        $this->required = $required;
        $this->class = $class;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
