const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const cache = require('gulp-cached');
const cleanCSS = require('gulp-clean-css');

function scss() {
    return src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./dist'));
}

function watchStyles() {
    watch('./sass/**/*.scss', scss);
}

exports.scss = scss;
exports.watch = watchStyles;