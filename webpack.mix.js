let mix = require('laravel-mix');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.scripts([
	'node_modules/jquery/dist/jquery.js',
	'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
	'resources/assets/js/myscripts.js'
	], 
	'public/js/all.js','./');

/* 
mix.browserSync({
 proxy: 'http://localhost:8000/'
});
 */
