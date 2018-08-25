<?php

namespace NightKit\NovaElements\Fields\ElementRadio;

use Laravel\Nova\Fields\Field;

class ElementRadio extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-radio';

    /**
     *
     * Set buttons style
     * @param $array
     * @return $this
     */

    public $buttons = false;
    /**
     *
     * Set bordered to buttons
     * @param $array
     * @return $this
     */

    public $bordered = false;

    /**
     *
     * Add option
     * @param array $array
     * @return $this
     */
    public function options($array) {
        return $this->withMeta(['options' => $array]);
    }

    /**
     *
     * Set buttons style
     * @return $this
     */
    public function buttons() {
        $this->buttons = true;
        return $this;
    }

    /**
     *
     * Set bordered style
     * @return $this
     */
    public function bordered() {
        $this->bordered = true;
        return $this;
    }

    public function meta()
    {
        return array_merge([
            'buttons' => $this->buttons,
            'bordered' => $this->bordered
        ], $this->meta);
    }
}
