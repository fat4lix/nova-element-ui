import locale from 'element-ui/lib/locale';
const mapLocales = {
  'af-ZA': require('element-ui/lib/locale/lang/af-ZA'),
  'ar': require('element-ui/lib/locale/lang/ar'),
  'bg': require('element-ui/lib/locale/lang/bg'),
  'ca': require('element-ui/lib/locale/lang/ca'),
  'cs-CZ': require('element-ui/lib/locale/lang/cs-CZ'),
  'da': require('element-ui/lib/locale/lang/da'),
  'de': require('element-ui/lib/locale/lang/de'),
  'ee': require('element-ui/lib/locale/lang/ee'),
  'el': require('element-ui/lib/locale/lang/el'),
  'en': require('element-ui/lib/locale/lang/en'),
  'es': require('element-ui/lib/locale/lang/es'),
  'fa': require('element-ui/lib/locale/lang/fa'),
  'fi': require('element-ui/lib/locale/lang/fi'),
  'fr': require('element-ui/lib/locale/lang/fr'),
  'he': require('element-ui/lib/locale/lang/he'),
  'hu': require('element-ui/lib/locale/lang/hu'),
  'id': require('element-ui/lib/locale/lang/id'),
  'it': require('element-ui/lib/locale/lang/it'),
  'ja': require('element-ui/lib/locale/lang/ja'),
  'km': require('element-ui/lib/locale/lang/km'),
  'ko': require('element-ui/lib/locale/lang/ko'),
  'ku': require('element-ui/lib/locale/lang/ku'),
  'kz': require('element-ui/lib/locale/lang/kz'),
  'lt': require('element-ui/lib/locale/lang/lt'),
  'lv': require('element-ui/lib/locale/lang/lv'),
  'mn': require('element-ui/lib/locale/lang/mn'),
  'nb': require('element-ui/lib/locale/lang/nb-NO'),
  'nl': require('element-ui/lib/locale/lang/nl'),
  'pl': require('element-ui/lib/locale/lang/pl'),
  'pt': require('element-ui/lib/locale/lang/pt'),
  'pt-br': require('element-ui/lib/locale/lang/pt-br'),
  'ro': require('element-ui/lib/locale/lang/ro'),
  'ru-RU': require('element-ui/lib/locale/lang/ru-RU'),
  'sk': require('element-ui/lib/locale/lang/sk'),
  'sl': require('element-ui/lib/locale/lang/sl'),
  'sv-SE': require('element-ui/lib/locale/lang/sv-SE'),
  'ta': require('element-ui/lib/locale/lang/ta'),
  'th': require('element-ui/lib/locale/lang/th'),
  'tk': require('element-ui/lib/locale/lang/tk'),
  'tr-TR': require('element-ui/lib/locale/lang/tr-TR'),
  'ua': require('element-ui/lib/locale/lang/ua'),
  'ug-CN': require('element-ui/lib/locale/lang/ug-CN'),
  'vi': require('element-ui/lib/locale/lang/vi'),
  'zh-CH': require('element-ui/lib/locale/lang/zh-CN'),
  'zh-TW': require('element-ui/lib/locale/lang/zh-TW')
}

import {
    Select,
    Option,
    Input,
    Autocomplete,
    InputNumber,
    Radio,
    RadioButton,
    RadioGroup,
    Checkbox,
    CheckboxButton,
    CheckboxGroup,
    ColorPicker,
    Switch,
    Tag
} from 'element-ui';

Nova.booting(function(Vue, router) {
  locale.use(mapLocales[Nova.config.locale] || mapLocales['en']);
  Vue.use(Select);
  Vue.use(Option);
  Vue.use(Input);
  Vue.use(Autocomplete);
  Vue.use(InputNumber);
  Vue.use(Radio);
  Vue.use(RadioButton);
  Vue.use(RadioGroup);
  Vue.use(Checkbox);
  Vue.use(CheckboxButton);
  Vue.use(CheckboxGroup);
  Vue.use(ColorPicker);
  Vue.use(Tag);
  Vue.use(Switch);
})