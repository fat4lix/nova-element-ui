<?php

namespace NightKit\NovaElements\Fields\ElementPassword;

use Illuminate\Support\Facades\Hash;
use Laravel\Nova\Http\Requests\NovaRequest;
use NightKit\NovaElements\Fields\ElementInput\ElementInput;

class ElementPassword extends ElementInput
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-input';

    /**
     * Hydrate the given attribute on the model based on the incoming request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  string  $requestAttribute
     * @param  object  $model
     * @param  string  $attribute
     * @return void
     */
    protected function fillAttribute(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if (! empty($request->{$requestAttribute})) {
            $model->{$attribute} = Hash::make($request[$requestAttribute]);
        }
    }

    /**
     * Prepare the field for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(
            parent::jsonSerialize(),
            ['value' => '']
        );
    }

    public function meta()
    {
        return  array_merge([
            'type' => 'password'
        ], parent::meta());
    }
}
