var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
livereload = require('gulp-livereload');
sass = require('gulp-sass');
concat = require('gulp-concat');
uglify = require('gulp-uglify');
imagemin = require('gulp-imagemin');
pngquant = require('imagemin-pngquant'); // $ npm i -D imagemin-pngquant

//Compile sass
gulp.task('sass', function () {
  gulp.src('www/sass/*.scss')
    .pipe(sass.sync({includePaths: ['www/sass','www/lib/Materialize/sass'], outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('www/css'))
    .pipe(livereload());
});

gulp.task('sass:watch', function () {
  gulp.watch(['www/sass/*.scss'], ['sass']);
});

//Concatenate scripts
gulp.task('scripts', function() {
  return gulp.src([
    'www/lib/jquery/dist/jquery.js',
    'www/lib/Materialize/dist/js/materialize.js',
    'www/lib/jquery-validation/dist/jquery.validate.min.js',
    'www/javascript/main.js'])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest('www/js'))
    .pipe(livereload());
});

//Compress images
gulp.task('images', function() {
  return gulp.src('www/images/*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngquant()]
    }))
    .pipe(gulp.dest('www/img'))
    .pipe(livereload());
});

//Watch for changes
gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('www/sass/*.scss', ['sass']);
  gulp.watch('www/javascript/**', ['scripts']);
  gulp.watch('www/images/**', ['images']);
  gulp.watch(['www/*.html','www/layouts/*.html','www/*.php']).on('change', livereload.changed);
});


// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass','scripts','images','watch']);
