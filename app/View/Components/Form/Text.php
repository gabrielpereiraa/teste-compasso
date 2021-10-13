<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Text extends Component
{
    public $style;
    public $title;
    public $field;
    public $value;
    public $required;
    public $class;
    public $type;
    public $max;
    public $mask;
    public $mask2;
    public $subtitle;
    public $placeholder;
    public $disabled;

    public function __construct($style="1", $title, $subtitle="", $field, $value = "", $required = 0, $type="text", $class="", $max="200", $mask = "", $mask2 = "", $placeholder = "", $disabled = "")
    {
        $this->style = $style;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->field = $field;
        $this->value = $value;
        $this->required = $required;
        $this->type = $type;
        $this->class = $class;
        $this->max = $max;
        $this->mask = $mask;
        $this->mask2 = $mask;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('components.form.text');
    }
}
