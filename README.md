# Nova + Element UI

This is a set of component Element UI for Laravel Nova

## Installation

1) ```composer require nightkit/nova-element-ui```
2) Add NightKit\NovaElements\NovaElementsServiceProvider::class to your config/app.php in providers section
3) ``` php artisan vendor:publish --provider="NightKit\NovaElements\NovaElementsServiceProvider" --tag="public" ```

### Components

This is awailable component for this time.

```php
use NightKit\NovaElements\Fields\ElementInput\ElementInput;
use NightKit\NovaElements\Fields\ElementPassword\ElementPassword;
use NightKit\NovaElements\Fields\ElementSelect\ElementSelect;
use NightKit\NovaElements\Fields\ElementCheckbox\ElementCheckbox;
use NightKit\NovaElements\Fields\ElementRadio\ElementRadio;
use NightKit\NovaElements\Fields\ElementSwitch\ElementSwitch;
use NightKit\NovaElements\Fields\ElementAutocomplete\ElementAutocomplete;
use NightKit\NovaElements\Fields\ElementNumber\ElementNumber;
use NightKit\NovaElements\Fields\ElementTimezoneAutocomplete\ElementTimezoneAutocomplete;
use NightKit\NovaElements\Fields\ElementTimezoneSelect\ElementTimezoneSelect;
```

#### ElementInput

ElementInput just simple unput element with couple of cool features

You can add it like that
```php
  public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementInput::make('String')
      ];
  }
```
![](https://monosnap.com/image/al5xWRSlA5c4SrMjwS86oFQhrWKr5x.png)

To make this input with clear action just add ```clearable()```

```php
  public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementInput::make('String')
              ->clearable()
      ];
  }
```
![](https://monosnap.com/image/MmzHgs3lz9BgAX36cH8a2blanheilv.png)

You can also add prefix or suffix icon with ```prefixIcon()``` and```suffixIcon()```

```php
  public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementInput::make('String')
              ->clearable()
              ->prefixIcon('el-icon-date') //icon css class 
      ];
  }
```
![](https://monosnap.com/image/1nZ6gp80L3rbcRmLwBu8eRwPuvDWWa.png)

If you need a textarea you can simple make it by ```textarea()```

```php
   public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            ElementInput::make('String')
                ->textarea(4, true)
        ];
    }
```
![](https://monosnap.com/image/pRZNWMTAZsdKDsibDLtGoQwBzvz2VW.png)

Textarea accepts several parameters, number of rows and autosize

#### ElementAutocomplete

ElementAutocomplete looks like a input but is used  if you need autocomplete

```php
    return [
        ID::make()->sortable(),
        ElementAutocomplete::make('String')
            ->suggestions(['vue', 'laravel', 'nova'])
    ];
```
![](https://monosnap.com/image/ome1YEsDkQCKoN28Jgd8ymavvccA2u.png)

This field has a few method

```placement() @string```
Placement of the popup menu (top / top-start / top-end / bottom / bottom-start / bottom-end) default bottom-start

```triggerOnFocus @bool```
Whether show suggestions when input focus (default true)

```debounce() @int```
Debounce delay when typing, in milliseconds (default 300)


#### ELementSelect

Just simple select field with more beautiful design

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementSelect::make('String')
              ->options(['vue', 'laravel', 'nova'])
      ];
  }
```
![](https://monosnap.com/image/IyMTHL59vtmdHDF8k8n1TzeXL7hRfx.png)


#### ElementTimezoneSelect and ElementTimezoneAutocomplete

This two fields depends on ElementSelect and ElementAutocompele to choice timezone more comfortable

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementTimezoneAutocomplete::make('String'),
          ElementTimezoneSelect::make('String')
      ];
  }
```
![](https://monosnap.com/image/FSEK0ug9mj6pjIwMHTPpqcLuf4LqNc.png)

#### ElementNumber

The number input field on steroids:)

It's depend on Nova native Number field and support all its functions

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementNumber::make('Number')
              ->min(2)
              ->max(6)
              ->step(2)
      ];
  }
```
![](https://monosnap.com/image/2QlWiG1ymMfJkL9mr2xvB7CYefvg33.png)

Also this field provide several methods

```precision() @int```
Precision of input value	

```showControls() @bool```
whether to enable the control buttons	

```rightControls()```
Move the control buttons to the right

#### ElementRadio

Radio element 

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementRadio::make('String')
              ->options([
                  ['value' => '1', 'label' => 'vue'],
                  ['value' => '2', 'label' => 'laravel'],
                  ['value' => '3', 'label' => 'nova'],
              ])
      ];
  }
```
![](https://monosnap.com/image/SHR9Ae2SXmXQ8fezBwhx7mw24m9kox.png)

If you want button style radio just use ```buttons()``` method

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementRadio::make('String')
              ->options([
                  ['value' => '1', 'label' => 'vue'],
                  ['value' => '2', 'label' => 'laravel'],
                  ['value' => '3', 'label' => 'nova'],
              ])->buttons()
      ];
  }
  ```
![](https://monosnap.com/image/UXfvA05m2WxZa7bUvHnEivoRCWuuKq.png)

Or bordered style with ```bordered()```

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementRadio::make('String')
              ->options([
                  ['value' => '1', 'label' => 'vue'],
                  ['value' => '2', 'label' => 'laravel'],
                  ['value' => '3', 'label' => 'nova'],
              ])->bordered()
      ];
  }
  ```
![](https://monosnap.com/image/B3KDCNl8sOYb04P6KFI2xHOUAifhpO.png)


#### ElementCheckbox

ElementCheckbox depends on native Nova Boolean field with couple cool features

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementCheckbox::make('Boolean')
      ];
  }
```
![](https://monosnap.com/image/wixlJiNHNGLE3fnbp6pH7hvzQcOMb0.png)

On detail page and index it's cool looks with el-tag element

![](https://monosnap.com/image/byme5QgvZ5nCAIqg6lsbbB1pbkXiTy.png)

Of course you can change standart 'True' 'False' labels on what want to

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementCheckbox::make('Boolean')
              ->falseLabel('Off')
              ->trueLabel('On')
      ];
  }
```
![](https://monosnap.com/image/MzKADrRMR4XBQ04mYBwJ275LOi02gG.png)

If you d'not want to be displayed el-tag you can hide it with ```showTagOnIndex()``` ```showTagOnDetail()```

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementCheckbox::make('Boolean')
              ->falseLabel('Off')
              ->trueLabel('On')
          ->showTagOnDetail(false)
          ->showTagOnIndex(false)
      ];
  }
```

When you just see only label

#### ElementSwitch

ElementSwitch is depends on ElementCheckbox

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementSwitch::make('Boolean')
              ->falseLabel('Off')
              ->trueLabel('On')
      ];
  }
```

![](https://monosnap.com/image/uc3G1XdWqV1Hr9GL2VYEwDnLWVHCJb.png)

If you want to show your labels on switch use ```showLabels()``` method

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementSwitch::make('Boolean')
              ->falseLabel('Off')
              ->trueLabel('On')
              ->showLabels()
      ];
  }
```
![](https://monosnap.com/image/6QqnKDRd2jEGjt2zVZmXDLqeDpiXJx.png)

Also you can change active/inactive colors on switch

```php
public function fields(Request $request)
  {
      return [
          ID::make()->sortable(),
          ElementSwitch::make('Boolean')
              ->falseLabel('Off')
              ->trueLabel('On')
              ->showLabels()
          ->activeColor('#13ce66')
          ->inactiveColor('#ff4949')
      ];
  }
```

![](https://monosnap.com/image/VErv5TqmJKCnqOHtDnXOLKYgvwzCCS.png)


## Components in progress

* ~~Input~~
* ~~Number~~
* ~~Select~~
* ~~Autocomplete~~
* ~~Checkbox~~
* ~~Radio~~
* ~~Switch~~
* Date
* Time
* DateTime
* DataTimeRange
* Tabs
* Upload
* Slider
* Cascader
* Upload
* Transfer

## Built With

* [Laravel Nova](http://nova.laravel.com) - The best admin panel for Laravel
* [Element UI](http://element.eleme.io/#/en-US/) - The best set of components for Vue.js

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details