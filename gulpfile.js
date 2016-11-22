const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    // mix.sass('app.scss')
    //    .webpack('app.js');

    // mix.sass('main.scss')
    //     .version('css/main.css');
    //
    // mix.sass('home.scss')
    //     .version('css/home.css');

    // mix.sass('products_1.scss')
    //     .version('css/products_1.css');
    //
    // mix.browserSync({
    //     proxy: 'http://zhanshi.x.com/'
    // });

    mix.sass('home_1.scss');
});
