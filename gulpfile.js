const {series, watch, parallel, dest, src} = require ('gulp');
const sass = require('gulp-sass')(require('sass'));
const notify = require('gulp-notify');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const gulp = require('gulp');


function cssFile (){
    return src('src/**/*.scss')
    .pipe(sass())
    .pipe(dest('build/css/'))

};

function comprimirImagen (){
    return src('src/img/*.{jpg,webp,png}')
      .pipe(imagemin([pngquant({quality: [0.5, 0.5]})
      ]))
      .pipe(dest('build/img/'))
      .pipe(notify())
  };



function jsCompiler (){
    return src('')
};

function watcher(){
    watch('src/**/*.scss', cssFile);
    watch('src/img/*.{jpg,webp,png}', cssFile);
};
exports.default = series(cssFile,comprimirImagen, watcher);