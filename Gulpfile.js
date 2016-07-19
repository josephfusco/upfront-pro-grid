var gulp = require('gulp'),
	sass = require('gulp-sass'),
	rename = require("gulp-rename"),
	watch = require('gulp-watch');

gulp.task('styles', function () {
	gulp.src('sass/**/*.scss')
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(rename({basename: 'upfront-pro-grid'}))
		.pipe(gulp.dest('.'));
});

gulp.task('watch', function() {
	gulp.watch('sass/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);
