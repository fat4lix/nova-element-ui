<?php

namespace NightKit\NovaElements\Fields\ElementTabs;

use Illuminate\Http\Request;
use Laravel\Nova\Contracts\ListableField;
use Laravel\Nova\Fields\Field;


class ElementTabsRelations extends Field implements ListableField
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'element-tabs';


    public $tabs = [];

    public $activeTab = '';

    public $typeTab = '';


    public function activeTab($tabName) {
        $this->activeTab = $tabName;
        return $this;
    }

    public function borderCard() {

        $this->typeTab = 'border-card';

        return $this;
    }

    public function addTab($tabName, $field, $relationType = '') {
        $tabProperties = [
            'tabName' => $tabName,
            'field' => $field,
            'targetRelation' => $field->attribute
        ];

        if (property_exists($field, 'hasManyRelationship')) {
            $tabProperties['relationType'] = 'hasMany';
        }

        if (property_exists($field, 'manyToManyRelationship')) {
            $tabProperties['relationType'] = 'belongsToMany';
        }

        if (property_exists($field, 'hasOneRelationship')) {
            $tabProperties['relationType'] = 'hasOne';
        }

        if($relationType) {
            $tabProperties['relationType'] = $relationType;
        }
        $this->tabs[] = $tabProperties;
        return $this;
    }

    /**
     * Resolve the field's value.
     *
     * @param  mixed  $resource
     * @param  string|null  $attribute
     * @return void
     */
    public function resolve($resource, $attribute = null)
    {
        // empty
    }

    /**
     * Get additional meta information to merge with the field payload.
     *
     * @return array
     */
    public function meta()
    {
        return array_merge([
            'activeTab' => $this->activeTab,
            'typeTab' => $this->typeTab,
            'tabs' => $this->tabs,
            'listable' => true,
        ], $this->meta);
    }
}
