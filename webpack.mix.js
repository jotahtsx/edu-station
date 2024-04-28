const mix = require('laravel-mix');

mix
  .sass('resources/views/admin/assets/scss/reset.scss', 'public/backend/assets/css/reset.css')
  .sass('resources/views/admin/assets/scss/boot.scss', 'public/backend/assets/css/boot.css')
  .sass('resources/views/admin/assets/scss/login.scss', 'public/backend/assets/css/login.css')


  .scripts([
    'resources/views/admin/assets/js/jquery.js'
  ], 'public/backend/assets/js/jquery.js')

  .scripts([
    'resources/views/admin/assets/js/login.js'
  ], 'public/backend/assets/js/login.js')


  .copyDirectory('resources/views/admin/assets/images', 'public/backend/assets/images')

  .options({
    processCssUrls: false
  })

  .version()