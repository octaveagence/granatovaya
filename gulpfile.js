// gulpfile.js

const gulp = require('gulp');
const handlebars = require('gulp-compile-handlebars');
const rename = require('gulp-rename');

var sass = require('gulp-sass');
const connect = require('gulp-connect');


// COPY

/**
 * Copy files from monster template
 */
gulp.task('copy:monster', () => {
  return gulp.src([
      // './monster_template/assets/**/*',
      './monster_template/css/**/*',
      './monster_template/fonts/**/*',
      './monster_template/images/**/*',
      './monster_template/js/**/*',
    ], {base: './monster_template'})
    .pipe(gulp.dest('./dist/'));
});

/**
 * Copy assets from /src
 */
gulp.task('copy:assets', () => {
  return gulp.src([
      './src/assets/**/*',
    ], {base: './src/'})
    .pipe(gulp.dest('./dist/'));
});

// BUILD

/**
 * Build sass file from /src and copy.
 */
gulp.task('build:sass', function () {
  return gulp.src('./src/css/overrides.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./dist/css/'));
});

/**
 * Build html from hbs and copy.
 */
gulp.task('build:html', () => {
  return gulp.src('./src/pages/**/*.hbs')
    .pipe(handlebars({}, {
      ignorePartials: true,
      batch: ['./src/partials'],
      helpers : {
        menuActive: function(page, item){
          return page==item ? 'active' : '';
        },
        eq(a,b){
          return a===b;
        }
      }
    }))
    .pipe(rename({
      extname: '.html'
    }))
    .pipe(gulp.dest('./dist'));
});

/**
 * Full build process
 */
gulp.task('build:full', ['copy:monster', 'copy:assets', 'build:sass', 'build:html']);

/**
 * Partial build. Only process source files. (HTML & SASS)
 */
gulp.task('build:sources', ['build:sass', 'build:html']);


// SERVE

/**
 * Serve files from /dist
 */
gulp.task('http:serve', function() {
  connect.server({
    root: 'dist',
    livereload: true
  });
});

/**
 * Livereload files
 */
gulp.task('http:reload', function () {
  gulp.src('./dist/*').pipe(connect.reload());
});


// WATCH


/**
 * Triggers livereload on file changes
 */
gulp.task('watch:reload', ['build:full'], function () {
  gulp.watch(['./dist/**/*'], ['http:reload']);
});

/**
 * Triggers sources build on file changes.
 */
gulp.task('watch:sources', ['build:full'], function () {
  gulp.watch(['./src/**/*'], ['build:sources']);
});


// DEFAULT

gulp.task('default', ['build:full', 'http:serve', 'watch:sources', 'watch:reload']);

