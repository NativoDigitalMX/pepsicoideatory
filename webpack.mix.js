const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */



mix
    .js('resources/js/app.js', 'public/js')
    .extract()
    .vue(3)
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss")
    ])
    .options({
        processCssUrls: false // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
    })
    .sourceMaps()
    .webpackConfig({
        output: { chunkFilename: "js/app/[name].js?id=[chunkhash]" },
    });

if (mix.inProduction()) {
    mix.version();
}
