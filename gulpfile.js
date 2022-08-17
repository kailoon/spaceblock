const { src, dest, watch, series } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const order = require('gulp-order')
const concat = require('gulp-concat')
const browsersync = require('browser-sync').create()

// Sass Task
function sassTask() {
	return src('src/scss/*.scss')
		.pipe(order(['src/scss/temp.scss', 'src/scss/theme.scss']))
		.pipe(sass())
		.pipe(concat('style.css'))

		.pipe(dest('.'))
}

// Javascript Task
function jsTask() {
	return src('src/js/app.js').pipe(dest('assets/js'))
}

// HTML Task
function htmlTask() {
	return src('**/*.html')
}

// json Task
function jsonTask() {
	return src('./theme.json')
}

// browsersync Tasks
function browserSyncServe(cb) {
	browsersync.init({
		proxy: 'http://block-dev.test/'
	})
	cb()
}

function browsersyncReload(cb) {
	browsersync.reload()
	cb()
}

// Watch Task
const watchTask = () =>
	watch('src/scss/*.scss', series(sassTask, browsersyncReload))
watch('src/js/app.js', series(jsTask, browsersyncReload))
watch('**/*.html', series(browsersyncReload))
watch('./theme.json', series(browsersyncReload))

// Default Gulp Task
exports.default = series(sassTask, jsTask, browserSyncServe, watchTask)
