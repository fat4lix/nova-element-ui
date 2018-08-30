<?php

namespace NightKit\NovaElements;

use Laravel\Nova\Nova;
use Illuminate\Support\ServiceProvider;

class NovaElementsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../dist' => public_path('vendor/nova-element-ui'),
            ], 'public');
            $this->publishes([
                __DIR__.'/../fonts' => public_path('fonts'),
            ], 'public');
        }

        Nova::serving(function ($event) {
            Nova::script('nova-element-ui', 'vendor/nova-element-ui/nova-element-ui.js');
        });

    }

    public function register()
    {
        $this->app->register('NightKit\NovaElements\Fields\ElementAutocomplete\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementCheckbox\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementInput\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementNumber\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementRadio\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementSelect\FieldServiceProvider');
        $this->app->register('NightKit\NovaElements\Fields\ElementTabs\FieldServiceProvider');
    }

}
