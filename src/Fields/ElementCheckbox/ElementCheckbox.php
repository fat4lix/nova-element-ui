<?php

namespace NightKit\NovaElements\Fields\ElementCheckbox;
use Laravel\Nova\Fields\Boolean;

class ElementCheckbox extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-checkbox';

    /**
     * True label to display
     *
     * @var string
     */
    public $checkboxType = 'checkbox';

    /**
     * True label to display
     *
     * @var string
     */
    public $trueLabel = 'True';

    /**
     * False label to display
     *
     * @var string
     */
    public $falseLabel = 'False';


    /**
     * True label to display
     *
     * @var string
     */
    public $showTagOnIndex = true;
    /**
     * False label to display
     *
     * @var string
     */
    public $showTagOnDetail = true;


    /**
     * Set custom true label
     * @param string $string
     * @return $this
     */
    public function trueLabel($string) {
        $this->trueLabel = $string;
        return $this;
    }
    /**
     * Set custom false label
     * @param string $string
     * @return $this
     */
    public function falseLabel($string) {
        $this->falseLabel = $string;
        return $this;
    }

    public function showTagOnIndex($value) {
        $this->showTagOnIndex = $value;
        return $this;
    }

    public function showTagOnDetail($value) {
        $this->showTagOnDetail = $value;
        return $this;
    }

    public function meta()
    {
        return array_merge([
            'trueLabel' => $this->trueLabel,
            'falseLabel' => $this->falseLabel,
            'showTagOnDetail' => $this->showTagOnDetail,
            'showTagOnIndex' => $this->showTagOnIndex,
            'checkboxType' => $this->checkboxType
        ], $this->meta);
    }
}
