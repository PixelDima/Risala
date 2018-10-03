/**
 *
 * Gulpfile setup
 *
 * @since 1.0.0
 * @authors @pixeldima,@TahriAdel,@Ahmed_phi
 * @package noor
 */

const pkg = require('./package.json');
const title = pkg.title;
// Project configuration
const project = pkg.name; // Project name, used for build zip.
const sass_src = './framework/asset/site/css/sass/**/*.scss';
const sass_des = './framework/asset/site/css/';

const sass_src_admin = './framework/asset/admin/css/**/*.scss';
const sass_des_admin = './framework/asset/admin/css/';

const js_es6_in = './framework/asset/site/js/es6/**/*.js';
const js_out = './framework/asset/site/js/';

const buildZipDestination = './build/';
const buildFiles = ['./**', '!build', '!build/**', '!node_modules/**', '!*.json', '!*.map', '!*.xml', '!gulpfile.js', '!*.sublime-project', '!*.sublime-workspace', '!*.sublime-gulp.cache', '!*.log', '!*.DS_Store', '!*.gitignore', '!TODO', '!*.git', '!*.ftppass', '!*.DS_Store', '!sftp.json', '!yarn.lock', '!*.md', '!package.lock'];
const cleanFiles = [
	'./build/' + project + '/',
	'./build/' + project + ' 2/',
	'./build/' + project + '.zip'
];
const buildDestination = './build/' + project + '/';
const buildDestinationFiles = './build/' + project + '/**/*';

/**
 * Load Plugins.
 */
const gulp = require('gulp');
const jshint = require('gulp-jshint');
const sass = require('gulp-sass');
var replace = require('gulp-replace-task');
var zip = require('gulp-zip');
const minifycss = require('gulp-minify-css');
const lineec = require('gulp-line-ending-corrector');
const autoprefixer = require('gulp-autoprefixer');
const copy = require('gulp-copy');
const rename = require('gulp-rename');
const notify = require('gulp-notify');
const sourcemaps = require('gulp-sourcemaps');
const filter = require('gulp-filter');
const ignore = require('gulp-ignore'); // Helps with ignoring files and directories in our run tasks
const cache = require('gulp-cache');
const babel = require("gulp-babel");
var del = require('del');
const mmq = require('gulp-merge-media-queries'); // Combine matching media queries into one media query definition.

const SassDivOptions = {
	errLogToConsole: true,
	sourceComments: false,
	outputStyle: 'expanded',
	precision: 10
};

const SassOutOptions = {
	errLogToConsole: false,
	sourceComments: false,
	outputStyle: 'expanded',
	precision: 10
};

const SassMinOptions = {
	errLogToConsole: false,
	sourceComments: false,
	outputStyle: 'compact',
	precision: 10
};

var AUTOPREFIXER_BROWSERS = {
	browsers: ['last 2 version', '> 1%', 'ie >= 9', 'ie_mob >= 10', 'ff >= 30', 'chrome >= 34', 'safari >= 7', 'opera >= 23', 'ios >= 7', 'android >= 4', 'bb >= 10']
};

// Lint Task
gulp.task('lint', function () {
	return gulp
		.src('./js/**/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'));
});

gulp.task('clearCache', function (done) {
	cache.clearAll();
	done();
});

gulp.task('clean', function (done) {
	return del(cleanFiles);
	done();
});

gulp.task('copy', function (done) {
	return gulp.src(buildFiles)
		.pipe(copy(buildDestination));
	done();
});

gulp.task('copyToTheme', function (done) {
	const zipfile = './build/' + project + '.zip';
	const buildDestination = '../../themes/noor/framework/plugins/';
	return gulp.src(zipfile)
		.pipe(copy(buildDestination, {
			prefix: 2
		}));
	done();
});

gulp.task('zip', function (done) {
	return gulp.src(buildDestination + '/**', {
			base: 'build'
		})
		.pipe(zip(project + '.zip'))
		.pipe(gulp.dest(buildZipDestination));
	done();
});

gulp.task('variables', function (done) {
	return gulp.src(buildDestinationFiles)
		.pipe(replace({
			patterns: [{
					match: 'pkg.name',
					replacement: project
				},
				{
					match: 'pkg.title',
					replacement: pkg.title
				},
				{
					match: 'pkg.version',
					replacement: pkg.version
				},
				{
					match: 'pkg.author',
					replacement: pkg.author
				},
				{
					match: 'pkg.license',
					replacement: pkg.license
				},
				{
					match: 'pkg.copyright',
					replacement: pkg.copyright
				},
				{
					match: 'textdomain',
					replacement: pkg.name
				},
				{
					match: 'pkg.downloadid',
					replacement: pkg.downloadid
				},
				{
					match: 'pkg.description',
					replacement: pkg.description
				},
				{
					match: 'pkg.tested_up_to',
					replacement: pkg.tested_up_to
				}
			]
		}))
		.pipe(gulp.dest(buildDestination));
	done();
});

gulp.task('build-notice', function (done) {
	return gulp.src('./')
		.pipe(notify({
			message: 'Your build of ' + title + ' is complete.',
			onLast: false
		}));
	done();
});

gulp.task('sass', function (done) {
	return gulp.src(sass_src)
		.pipe(sourcemaps.init())
		.pipe(sass(SassDivOptions))
		.pipe(sourcemaps.write({
			includeContent: false
		}))
		.pipe(sourcemaps.init({
			loadMaps: true
		}))
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
		.pipe(sourcemaps.write('./map'))
		.pipe(lineec()) // Consistent Line Endings for non UNIX systems.
		.pipe(gulp.dest(sass_des))
		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(notify({
			message: 'Style task for 👨‍💻 is 💯',
			onLast: true
		}));
	done();
});

gulp.task('sassOut', function () {
	return gulp.src(sass_src)
		.pipe(sourcemaps.init())
		.pipe(sass(SassOutOptions))
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))

		.pipe(lineec())
		.pipe(gulp.dest(sass_des))

		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(notify({
			message: 'Style task for dev is 💯',
			onLast: true
		}))
});

gulp.task('sassMin', function () {
	return gulp.src(sass_src)
		.pipe(sass(SassMinOptions))
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))

		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(mmq({
			log: true
		})) // Merge Media Queries only for .min.css version.


		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(minifycss({
			maxLineLen: 10
		}))

		.pipe(lineec()) // Consistent Line Endings for non UNIX systems.
		.pipe(gulp.dest(sass_des))

		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(notify({
			message: 'Styles task for 🗜️ is 💯',
			onLast: true
		}))
});

gulp.task('sass_admin', function () {
	return gulp.src(sass_src_admin)
		.pipe(sass(SassMinOptions))
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))

		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(mmq({
			log: true
		})) // Merge Media Queries only for .min.css version.


		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(minifycss({
			maxLineLen: 10
		}))

		.pipe(lineec()) // Consistent Line Endings for non UNIX systems.
		.pipe(gulp.dest(sass_des_admin))

		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(notify({
			message: 'Styles task for 🗜️ is 💯',
			onLast: true
		}));
	done();
});


gulp.task('es6', function () {
	return gulp.src(js_es6_in)
		.pipe(babel({
			presets: ['es2015']
		}))
		.pipe(lineec())
		.pipe(gulp.dest(js_out));
});


gulp.task('build-process', gulp.series('clearCache', 'clean', 'sassMin', 'es6', 'copy', 'variables', 'zip', 'copyToTheme', function (done) {
	done();
}));

gulp.task('bot', gulp.series('build-process', 'build-notice', function (done) {
	done();
}));


gulp.task('watch', function () {
	gulp.watch('framework/asset/site/js/es6/**/*.js', gulp.parallel('es6'));
	gulp.watch(sass_src, gulp.parallel('sass'))
		.on('change', function (evt) {
			console.log(
				'[watcher] File ' + evt.path + ' was ' + evt.type + ', compiling...'
			);
		});
});

gulp.task('default', gulp.series(
	'sassMin',
	'sassOut',
	'sass_admin',
	'sass',
	'es6',
	'watch'
));