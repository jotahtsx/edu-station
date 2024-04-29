const mix = require('laravel-mix');

mix
  .sass('resources/views/admin/assets/scss/reset.scss', 'public/backend/assets/css/reset.css')
  .sass('resources/views/admin/assets/scss/app.scss', 'public/backend/assets/css/app.css')
  .sass('resources/views/admin/assets/scss/login.scss', 'public/backend/assets/css/login.css')


  .styles([
      'resources/views/admin/assets/css/normalize.css'
  ], 'public/backend/assets/css/libs.css')

  .scripts([
    'resources/views/admin/assets/js/jquery.js'
  ], 'public/backend/assets/js/jquery.js')

  .scripts([
    'resources/views/admin/assets/js/login.js'
  ], 'public/backend/assets/js/login.js')

  .scripts([
    'resources/views/admin/assets/js/app.js'
  ], 'public/backend/assets/js/app.js')


  .copyDirectory('resources/views/admin/assets/images', 'public/backend/assets/images')

  .options({
    processCssUrls: false
  })

  .version()