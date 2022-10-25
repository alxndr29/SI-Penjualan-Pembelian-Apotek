const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const through2 = require('through2');
const browserSync = require('browser-sync').create();
   
//scss to css
function style() {
  return gulp.src('public/assets/scss/**/*.scss', { sourcemaps: true })
    .pipe(sourcemaps.init())
    .pipe(sass({
      //   outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('public/assets/css', { sourcemaps: '.' }))
  // .pipe(bs.reload({
  //     stream: true
  // }));
}

// Watch function
function watch() {
  browserSync.init({
    proxy: 'http://localhost:8000/'
  });
  gulp.watch('public/assets/scss/**/*.scss', style);
  gulp.watch('public/assets/css/*.css').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;

const build = gulp.series(watch);
gulp.task('default', build, 'browser-sync');
