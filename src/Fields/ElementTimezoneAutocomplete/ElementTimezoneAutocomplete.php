<?php

namespace NightKit\NovaElements\Fields\ElementTimezoneAutocomplete;

use DateTimeZone;
use NightKit\NovaElements\Fields\ElementAutocomplete\ElementAutocomplete;


class ElementTimezoneAutocomplete extends ElementAutocomplete
{

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-autocomplete';

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

        $this->suggestions(collect(DateTimeZone::listIdentifiers(DateTimeZone::ALL))->mapWithKeys(function ($timezone) {
            return [$timezone => $timezone];
        })->all());
    }
}
