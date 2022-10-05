const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
require('laravel-mix-purgecss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/why-partner-slider.js', 'public/js')
    .js('resources/js/front.js', 'public/js')
    .js('resources/js/smartnote.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/slider.js', 'public/js')
    .js('resources/js/team-slider.js', 'public/js')
    .js('resources/js/connect-with-us.js', 'public/js')
    .js('resources/js/speculative-application.js', 'public/js')
    .js('resources/js/animate-blocks.js', 'public/js')
    .js('resources/js/resource-center.js', 'public/js')
    .js('resources/js/chat.js', 'public/js')
    .js('resources/js/our-history.js', 'public/js')
    .js('resources/js/uk-application.js', 'public/js')
    .js('resources/js/rp-application.js', 'public/js')
    .js('resources/js/post.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/image', 'public/image')
    .copy('resources/fonts', 'public/fonts')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')]
    })

if (mix.inProduction()) {
    mix.version();
}
