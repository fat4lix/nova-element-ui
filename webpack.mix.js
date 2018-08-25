
let mix = require('laravel-mix')

mix
  .js('./resources/js/nova-element-ui.js', 'dist')
  .setPublicPath('vendor/nova-element-ui')
  
