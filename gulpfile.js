// npm i -S gulp-postcss autoprefixer postcss-simple-vars postcss-nested postcss-mixins postcss-import postcss-hexrgba gulp-rename vinyl-source-stream gulp
const gulpPostcss = require("gulp-postcss"),
	  autoprefixer = require("autoprefixer"),
	  postcssSimpleVars = require("postcss-simple-vars"),
	  postcssNested = require("postcss-nested"), 
	  postcssMixins = require("postcss-mixins"),
	  postcssImport = require("postcss-import"),
	  hexRgba = require("postcss-hexrgba"),
	  rename = require("gulp-rename"),
      source = require('vinyl-source-stream'),
      browserify = require('browserify'),
      envify = require('envify/custom'),
	  { watch, src, dest, parallel } = require('gulp');

const CSS_SRC_FILE = "./wp-content/themes/austria-recruitment/assets/css/main-unbundled.css";
const BUNDLED_CSS_FILE_NAME = 'main-bundled.css';
const BUNDLED_CSS_FILE_DEST = './wp-content/themes/austria-recruitment/assets/css/';

const JS_SRC_FILE = "./wp-content/themes/austria-recruitment/assets/js/main-unbundled.js";
const BUNDLED_JS_FILE_NAME = 'main-bundled.js';
const BUNDLED_JS_FILE_DEST = './wp-content/themes/austria-recruitment/assets/js/';

let bundleCssI = 0;
let bundleJsI = 0;

exports.default = parallel(watchAndBundleCss, watchAndBundleJs);

function watchAndBundleCss() {
    bundleCss();

    watch([
            `${__dirname}/wp-content/themes/austria-recruitment/assets/css/**/*.css`,
            `!${__dirname}/wp-content/themes/austria-recruitment/assets/css/main-bundled.css`
        ],
         bundleCss
    );
}

function watchAndBundleJs() {
    bundleJs();

    watch([
            `${__dirname}/wp-content/themes/austria-recruitment/assets/js/**/*.js`,
            `!${__dirname}/wp-content/themes/austria-recruitment/assets/js/main-bundled.js`
        ],
         bundleJs
    );
}

function bundleCss(){
    bundleCssI++;
    console.log('bundle-css cycles: ' + bundleCssI);
    console.log(BUNDLED_CSS_FILE_NAME);

    return src(CSS_SRC_FILE)
    .pipe(gulpPostcss([
        postcssImport,
        autoprefixer({
            cascade: false
        }),
        postcssMixins, 
        postcssSimpleVars,
        hexRgba,
        postcssNested
    ]))
    .on('error', function(errorInfo){
        console.log( errorInfo.toString())
        this.emit('end');
    })
    .pipe(rename(BUNDLED_CSS_FILE_NAME))
    .pipe(dest(BUNDLED_CSS_FILE_DEST))
}

function bundleJs() {
    bundleJsI++;
    console.log('bundle-js cycles: ' + bundleJsI);
    console.log(BUNDLED_JS_FILE_NAME);

    return browserify(JS_SRC_FILE)
    .transform(envify(process.env))
    .bundle()
        .on('error', function(errorInfo){
   		    console.log( errorInfo.toString() )
   		    this.emit('end');
        })
        .pipe(source(BUNDLED_JS_FILE_NAME))
        .pipe(dest(BUNDLED_JS_FILE_DEST));
}
