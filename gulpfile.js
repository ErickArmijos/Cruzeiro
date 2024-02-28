
const { src, dest,watch } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const plumb=require("gulp-plumber");

function css(done) {
     src("scss/**/*.scss")
        .pipe(plumb())
            .pipe(sass().on('error', sass.logError))
                .pipe(dest("style")) 
    done();
    }

function dev(done){
    watch("scss/**/*.scss",css);
    done();
}

exports.css = css;
exports.dev=dev;

