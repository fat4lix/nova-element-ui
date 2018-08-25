<?php

namespace NightKit\NovaElements\Fields\ElementInput;

use Laravel\Nova\Fields\Field;

class ElementInput extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-input';

    /**
     * Clearable options
     * @var boolean
     */
    public $clearable = false;

    /**
     * Prefix Element UI icon
     * @var string
     */
    public $prefixIcon = '';

    /**
     * Suffix Element UI icon
     * @var string
     */
    public $suffixIcon = '';

    /**
     * Native textarea type
     * @var string
     */
    public $textarea = '';

    /**
     * Number of row on textarea
     * @var string
     */
    public $rows = '';

    public $mixed = [];

    /**
     * Autosize params
     * @var bool | array
     */
    public $autosizeTextarea = '';


    /**
     * Specify if the input field have clearable icon
     * @param bool
     * @return $this
     */
    public function clearable($value = true)
    {
        $this->clearable = true;

        return $this;
    }

    /**
     * Set suffix icon
     * @param string
     * @return $this
     */
    public function suffixIcon($iconClass)
    {
        $this->suffixIcon = $iconClass;

        return $this;
    }

    /**
     * Set prefix icon
     * @param string
     * @return $this
     */
    public function prefixIcon($iconClass)
    {
        $this->prefixIcon = $iconClass;

        return $this;
    }

    /**
     * Set prefix icon
     * @param string
     * @return $this
     */
    public function textarea($rows = 2, $autosize = false)
    {
        $this->textarea = true;
        $this->rows = $rows;
        $this->autosizeTextarea = $autosize;

        return $this;
    }


    /**
     * Get additional meta information to merge with the field payload.
     *
     * @return array
     */
    public function meta()
    {
        return array_merge([
            'clearable' => $this->clearable,
            'prefixIcon' => $this->prefixIcon,
            'suffixIcon' => $this->suffixIcon,
            'textarea' => $this->textarea,
            'rows' => $this->rows,
            'autosizeTextarea' => $this->autosizeTextarea
        ], $this->meta);
    }

}
