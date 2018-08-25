<?php

namespace NightKit\NovaElements\Fields\ElementAutocomplete;

use Laravel\Nova\Fields\Field;

class ElementAutocomplete extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-autocomplete';

    /**
     * Suggestions list for field
     * @var array
     */
    public $suggestions = [];

    /**
     * Set suggestions list for field
     * @param array
     * @return  $this
     */

    /**
     * Placement of the popup menu
     * top / top-start / top-end / bottom / bottom-start / bottom-end
     * default button-start
     * @var string
     */
    public $placement = '';

    /**
     * Whether show suggestions when input focus
     * @var bool
     */
    public $triggerOnFocus = true;

    /**
     * Debounce delay when typing, in milliseconds
     * @var int
     */
    public $debounce = 300;

    /**
     * Set placement value
     * @param string $value
     * @return $this
     */
    public function placement($value = 'bottom-start')
    {
        $this->placement = $value;
        return $this;
    }

    /**
     * Set triger-on-focus value
     * @param bool $bool
     * @return $this
     */
    public function triggerOnFocus($bool = true)
    {
        $this->triggerOnFocus = $bool;
        return $this;
    }

    /**
     * Set debounce value
     * @param int
     * @return $this
     */
    public function debounce($int) {
        $this->debounce = $int;
        return $this;
    }

    public function suggestions($array)
    {

        if ($this->isSimpleArray($array)) {
            $this->suggestions = $this->transformToMulti($array);
        } else {
          $this->suggestions = $array;
        }
        return $this;
    }

    /**
     * Suggestions list for field
     * @param array
     * @return  array
     */
    private function transformToMulti($array) {
        $multi = [];
        foreach ($array as $value) {
            $multi[] = ['value' => $value];
        }
        return $multi;
    }

    /**
     * Check is multidimension array
     * @param array
     * @return  bool
     */
    private function isSimpleArray($array) {
        $rv = array_filter($array, 'is_array');
        if(count($rv) > 0) return false;
        return true;
    }

    public function meta()
    {
        return array_merge([
            'suggestions' => $this->suggestions,
            'placement' => $this->placement,
            'triggerOnFocus' => $this->triggerOnFocus,
            'debounce' => $this->debounce
        ], $this->meta);
    }

}
