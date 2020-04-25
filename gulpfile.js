// npm i -S gulp-postcss autoprefixer postcss-simple-vars postcss-nested postcss-mixins postcss-import postcss-hexrgba gulp-rename vinyl-source-stream gulp
const gulpPostcss = require("gulp-postcss"),
	  autoprefixer = require("autoprefixer"),
	  postcssSimpleVars = require("postcss-simple-vars"),
	  postcssNested = require("postcss-nested"), 
	  postcssMixins = require("postcss-mixins"),
	  postcssImport = require("postcss-import"),
	  hexRgba = require("postcss-hexrgba"),
	  rename = require("gulp-rename"),
    //   source = require('vinyl-source-stream'),
    //   browserify = require('browserify'),
    //   envify = require('envify/custom'),
	  { watch, src, dest } = require('gulp');

const CSS_SRC_FILE = "./app/austria-recruitment/assets/css/main-unbundled.css";
const BUNDLED_CSS_FILE_NAME = 'main-bundled.css';
const BUNDLED_CSS_FILE_DEST = './app/austria-recruitment/assets/css/';

let bundleCssI = 0;

exports.default = watchAndBundleCss;

function watchAndBundleCss() {
    watch([
            `${__dirname}/app/austria-recruitment/assets/css/**/*.css`,
            `!${__dirname}/app/austria-recruitment/assets/css/main-bundled.css`
        ],
         bundleCss
    );
}

function bundleCss(fileForPageObj){
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

// function bundleJs(fileForPageObj) {
//     let {jsSrcFile, bundledJsFileName, bundledJsFileDest} = fileForPageObj;

//     return browserify(jsSrcFile)
//     .transform(envify(process.env))
//     .bundle()
//         .on('error', function(errorInfo){
//    		    console.log( errorInfo.toString() )
//    		    this.emit('end');
//         })
//         .pipe(source(bundledJsFileName))
//         .pipe(gulp.dest(bundledJsFileDest));
// }
