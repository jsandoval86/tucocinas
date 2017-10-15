var gulp = require('gulp'),
  browserify = require('browserify'),
  source = require('vinyl-source-stream'),
  buffer = require('vinyl-buffer'),
  uglify = require('gulp-uglify'),
  sass = require('gulp-sass')

// generar archivos javascript
gulp.task('js-files', function () {
	return browserify('./resources/assets/js/app.js')
		.bundle()
		.pipe(source('bundle.js'))
		.pipe(buffer())
		.pipe(uglify())
		.pipe(gulp.dest('./public/js'))
})

// generar archivos css
gulp.task('css-files', function () {
	return gulp.src('./resources/assets/sass/styles.scss')
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(gulp.dest('./public/css'))
})
