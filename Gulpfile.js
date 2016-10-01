const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

gulp.task('jquery', () => {
    return gulp.src(['node_modules/jquery/dist/**/*'])
        .pipe(gulp.dest('public/vendor/jquery'));
});

gulp.task('bootstrap', () => {
    return gulp.src(['node_modules/bootstrap/dist/**/*'])
        .pipe(gulp.dest('public/vendor/bootstrap'));
});

gulp.task('vendor', ['jquery', 'bootstrap']);

gulp.task('default', ['vendor']);
