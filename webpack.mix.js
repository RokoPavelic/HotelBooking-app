require("dotenv").config();
const mix = require("laravel-mix");

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

if (!mix.inProduction()) {
    // development settings:
    //     add source maps
    mix.webpackConfig({
        devtool: "source-map",
        stats: {
            children: true,
        },
    }).sourceMaps();
}

mix
    // don't rewrite URLs in CSS files
    .options({
        processCssUrls: false,
    })

    // open and serve with browsersync
    .browserSync({
        host: "localhost",
        port: 3000,
        proxy: {
            target: process.env.APP_URL, // don't forget to set APP_URL in .env
        },
    })

    // add versioning
    .version();

// ADD ASSETS TO COMPILE HERE:

// Examples:
mix.sass('resources/css/style.scss', 'public/css')
   .sass('resources/css/components/footer.scss', 'public/css')
   .sass('resources/css/pages/contact-us.scss', 'public/css')
   .sass('resources/css/pages/home.scss', 'public/css')
   .sass('resources/css/pages/burger-icon.scss', 'public/css')
   .sass('resources/css/components/navbar.scss', 'public/css')
   .sass('resources/css/pages/events.scss', 'public/css')
   .sass('resources/css/pages/about.scss', 'public/css')
   .sass('resources/css/pages/gallery.scss', 'public/css')
   .sass('resources/css/pages/adminStyles.scss', 'public/css');
// mix.js('resources/js/library.js', 'public/js');
// mix.js('resources/js/app.js', 'public/js').react();
mix.js("resources/js/finalProject.js", "public/js").react();
