<?php

namespace NightKit\NovaElements\Fields\ElementSwitch;

use NightKit\NovaElements\Fields\ElementCheckbox\ElementCheckbox;

class ElementSwitch extends ElementCheckbox
{

    public $showLabels = false;

    public $activeColor= "#409EFF";

    public $inactiveColor= "#C0CCDA";

    public function __construct(string $name, ?string $attribute = null, ?mixed $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->checkboxType = 'switch';
    }

    public function showLabels() {
        $this->showLabels = true;
        return $this;
    }

    public function activeColor($color) {
        $this->activeColor = $color;
        return $this;
    }

    public function inactiveColor($color) {
        $this->inactiveColor = $color;
        return $this;
    }

    public function meta()
    {
        return array_merge([
            'showLabels' => $this->showLabels,
            'activeColor' => $this->activeColor,
            'inactiveColor' => $this->inactiveColor
        ], parent::meta());
    }
}
