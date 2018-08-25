<?php

namespace NightKit\NovaElements\Fields\ElementTimezoneSelect;

use DateTimeZone;
use NightKit\NovaElements\Fields\ElementSelect\ElementSelect;

class ElementTimezoneSelect extends ElementSelect
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-select';

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->options(collect(DateTimeZone::listIdentifiers(DateTimeZone::ALL))->mapWithKeys(function ($timezone) {
            return [$timezone => $timezone];
        })->all());
    }
}
