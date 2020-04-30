var gulp = require('gulp');
var livereload = require('gulp-livereload')
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');




gulp.task('imagemin', function () {
    return gulp.src('./themes/custom/customtheme/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./themes/custom/customtheme/images'));
});


gulp.task('sass', function () {
  gulp.src('./themes/custom/customtheme/sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./themes/custom/customtheme/css'));
});


gulp.task('uglify', function() {
  gulp.src('./themes/custom/customtheme/lib/*.js')
    .pipe(uglify('main.js'))
    .pipe(gulp.dest('./themes/custom/customtheme/js'))
});

gulp.task('watch', function(){
    livereload.listen();

    gulp.watch('./themes/custom/customtheme/sass/**/*.scss', ['sass']);
    gulp.watch('./themes/custom/customtheme/lib/*.js', ['uglify']);
    gulp.watch(['./themes/custom/customtheme/css/style.css', './themes/custom/customtheme/**/*.twig', './themes/custom/customtheme/js/*.js'], function (files){
        livereload.changed(files)
    });
});