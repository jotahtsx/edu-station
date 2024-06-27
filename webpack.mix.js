const mix = require('laravel-mix');

mix
  .sass('resources/views/admin/assets/scss/main.scss', 'public/backend/assets/css/main.css')
  .sass('resources/views/admin/assets/scss/login.scss', 'public/backend/assets/css/login.css')
  .sass('resources/views/admin/assets/scss/icons.scss', 'public/backend/assets/css/icons.css')


  .scripts([
    'resources/views/admin/assets/js/jquery.js',
  ], 'public/backend/assets/js/jquery.js')

  .scripts([
    'resources/views/admin/assets/js/dataTables.min.js',
    'resources/views/admin/assets/js/jquery.mask.min.js',
  ], 'public/backend/assets/js/libs.js')

  .scripts([
    'resources/views/admin/assets/js/login.js'
  ], 'public/backend/assets/js/login.js')

  .scripts([
    'resources/views/admin/assets/js/app.js'
  ], 'public/backend/assets/js/app.js')

  .styles([
    'resources/views/admin/assets/css/dataTables.dataTables.min.css'
  ], 'public/backend/assets/css/libs.css')


  .copyDirectory('resources/views/admin/assets/images', 'public/backend/assets/images')
  .copyDirectory('resources/views/admin/assets/fonts', 'public/backend/assets/fonts')

  .options({
    processCssUrls: false
  })

  .version()