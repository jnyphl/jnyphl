let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'config.php',
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
            'source/**/*.js',
        ]),
    ],
});

mix.js('source/_assets/js/main.js', 'js')
    .sourceMaps()
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
    })
    .purgeCss({
        globs: [
            path.join(__dirname, "./node_modules/baguettebox.js/dist/baguetteBox.js"),
        ],
        extensions: ['html', 'md', 'js', 'php', 'vue'],
        folders: ['source'],
        whitelistPatterns: [/language/, /hljs/],
    })
    .sourceMaps()
    .version();
