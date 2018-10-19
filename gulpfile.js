const gulp = require('gulp')
const sass = require('gulp-sass')



gulp.task('cssdev', function () {
    return gulp.src('src/css/index.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('www/assets/css'))
})


