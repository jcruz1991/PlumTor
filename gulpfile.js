const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');

function scss() {
    return src('./sass/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(dest('./style.css'))
}

exports.scss = scss;