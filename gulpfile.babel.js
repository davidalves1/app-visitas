'use strict';

import gulp from 'gulp';
import uglify from 'gulp-uglify';
import stylus from 'gulp-stylus';
import watch from 'gulp-watch';
import plumber from 'gulp-plumber';
import cleanCss from 'gulp-clean-css';
import concat from 'gulp-concat';
import babel from 'gulp-babel';
import htmlmin from 'gulp-htmlmin';
import sourcemaps from 'gulp-sourcemaps';

// Minificação dos arquivos .js
gulp.task('minjs', function() {
    return gulp
        // Define a origem dos arquivos .js
        .src(['resources/assets/js/**/*.js'])
        // Prevençãao de erros
        .pipe(plumber())
        // Inicia os sourcemaps
        .pipe(sourcemaps.init())
        // Suporte para o padrão ES6 
        .pipe(babel({
            presets: ['es2015']
        }))
        // Realiza minificação
        .pipe(uglify())
        // Altera a extenção do arquivo
        .pipe(concat('app.min.js'))
        // Salva os arquivos minificados na pasta de destino
        .pipe(gulp.dest('public/js'));
});

gulp.task('stylus', function() {
    return gulp
        // Define a origem dos arquivos .scss
        .src('resources/assets/stylus/**/*.styl')
        // Prevençãao de erros
        .pipe(plumber())
        // Inicia os sourcemaps
        .pipe(sourcemaps.init())
        // Realiza o pré-processamento para css
        .pipe(stylus())
        // Realiza a minificação do css
        .pipe(cleanCss())
        // Altera a extenção do arquivo
        .pipe(concat('style.min.css'))
        // Salva os arquivos processados na pasta de destino
        .pipe(gulp.dest('public/css'));
});

gulp.task('html', function() {
  return gulp.src('resources/assets/js/views/**/*.html')
        // Inicia os sourcemaps
        .pipe(sourcemaps.init())
        // Remove os espaços em branco
        .pipe(htmlmin({collapseWhitespace: true}))
        // Salva os arquivos processados na pasta de destino
        .pipe(gulp.dest('public/js/views'));
});

gulp.task('watch', function() {
    gulp.start('default')
    gulp.watch('resources/assets/js/**/*.js', ['minjs'])
    gulp.watch('resources/assets/stylus/**/*.styl', ['stylus'])
    gulp.watch('resources/assets/js/views/**/*.html', ['html'])
});

gulp.task('default', ['minjs', 'stylus', 'html']);
