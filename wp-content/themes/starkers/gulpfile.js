var gulp = require('gulp'),
    // uglify = require('gulp-uglify'),
    // sass = require('gulp-ruby-sass');
    sass = require('gulp-sass'),
    gutil = require('gulp-util');

// gulp.task('scripts', function(){
//     gulp.src('js/*.js')
//     .pipe(uglify())
//     .pipe(gulp.dest('build/js'));
// });

function errorLog(err){
    console.error.bind(error);
    this.emit('end');
}

gulp.task('styles', function(){
    gulp.src('./css/*.scss')
    .pipe(sass())
    .on('error',console.error.bind(console))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch',function(){
    // gulp.watch('js/*.js',['scripts']);
    gulp.watch('css/*.scss',['styles']);
});

gulp.task('default',['styles','watch']);