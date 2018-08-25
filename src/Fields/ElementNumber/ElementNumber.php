<?php

namespace NightKit\NovaElements\Fields\ElementNumber;

use Laravel\Nova\Fields\Number;

class ElementNumber extends Number
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-number';

    /**
     * Precision of input value
     *
     * @param  integer  $number
     * @return $this
     */
    public function precision($number)
    {
        return $this->withMeta(['precision' => $number]);
    }

    /**
     * Position of the control buttons
     * @return $this
     */
    public function rightControls()
    {
        return $this->withMeta(['controlsPosition' => 'right']);
    }

    /**
     * The step size the field will increment and decrement by.
     *
     * @param  bool  $value
     * @return $this
     */
    public function showControls($value)
    {
        return $this->withMeta(['showControls' => $value]);
    }
}
