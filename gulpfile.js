// gulpfile.js

const gulp = require('gulp');
const handlebars = require('gulp-compile-handlebars');
const rename = require('gulp-rename');

var sass = require('gulp-sass');
const connect = require('gulp-connect');





gulp.task('html', () => {
  return gulp.src('./src/pages/**/*.hbs')
    .pipe(handlebars({}, {
      ignorePartials: true,
      batch: ['./src/partials'],
      helpers : {
        menuActive: function(page, item){
          return page==item ? 'active' : '';
        }
      }
    }))
    .pipe(rename({
      extname: '.html'
    }))
    .pipe(gulp.dest('./dist'));
});

gulp.task('monster_template', () => {
  return gulp.src([
      './monster_template/assets/**/*',
      './monster_template/css/**/*',
      './monster_template/fonts/**/*',
      './monster_template/images/**/*',
      './monster_template/js/**/*',
    ], {base: './monster_template'})
    .pipe(gulp.dest('./dist/'));
});

gulp.task('sass', function () {
  return gulp.src('./src/css/overrides.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./dist/css/'));
});

gulp.task('build', ['html', 'monster_template', 'sass', 'reload']);

gulp.task('reload', ['html', 'sass', 'monster_template'], function () {
  gulp.src('./dist/*')
    .pipe(connect.reload());
});


gulp.task('connect', function() {
  connect.server({
    root: 'dist',
    livereload: true
  });
});

gulp.task('watch', function () {
  gulp.watch(['./src/**/*'], ['build']);
});

gulp.task('default', ['connect', 'watch']);

