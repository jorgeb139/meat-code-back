const MIX = require('laravel-mix');
const PROJECT_FOLDER = path.basename(process.cwd());
const THEME_PATH = 'htdocs/content/themes/meat-theme';
const THEME_ASSETS_PATH = 'htdocs/content/themes/meat-theme/dist';

/*
  |--------------------------------------------------------------------------
  | Mix Asset Management
  |--------------------------------------------------------------------------
  |
  | Mix provides a clean, fluent API for defining some Webpack build steps
  | for your Laravel application. By default, we are compiling the Sass
  | file for the application as well as bundling up all the JS files.
  |
  | For more documentation about `laravel-mix` refer to: https://laravel-mix.com/docs/4.0/
  |
*/

MIX.setResourceRoot('../')
  .setPublicPath(THEME_ASSETS_PATH)
  .js('resources/js/app.js', 'js')
  .sass('resources/scss/app.scss', 'css')
  .extract()
  .version()
  .copy('./resources/images', `${THEME_ASSETS_PATH}/images`)
  .browserSync({
    proxy: process.env.BROWSERSYNC_PROXY_URL || `${PROJECT_FOLDER}.devel`,
    files: [
      `${THEME_PATH}/resources/views/**/*.php`,
      `${THEME_ASSETS_PATH}/js/**/*.js`,
      `${THEME_ASSETS_PATH}/css/**/*.css`,
    ],
  })
  .disableSuccessNotifications()
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    axios: 'axios',
    vue: 'Vue',
  })
  .then(stats => {
    console.log(Object.keys(stats.compilation.assets));
  });
