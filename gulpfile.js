var gulp = require('gulp'),
    del = require('del'),
    browserSync = require('browser-sync').create(),
    plugins = require('gulp-load-plugins')({
        camelize: true
    });

// ### path
global.GULP_CONFIG = require('./gulp-config');
// ### ERROR

// ERROR
var onError = function (err) {
    plugins.notify.onError({
        title: 'Task Failed [' + err.plugin + ']',
        message: "Error: <%= error.message %>",
        sound: true
    })(err);
    this.emit('end');
};


// ### Clean
function clean() {
    return del(GULP_CONFIG.path.destino, {
        force: true
    });
}
// ### styles
function styles() {
    return gulp.src(GULP_CONFIG.styles.origen)
        .pipe(plugins.sourcemaps.write({
            includeContent: false
        }))
        .pipe(plugins.sourcemaps.init({
            loadMaps: true
        }))
        .pipe(plugins.plumber({
            errorHandler: onError
        }))
        .pipe(plugins.sass(GULP_CONFIG.styles.libsass))
        .pipe(plugins.cssnano(GULP_CONFIG.styles.cssnano))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(GULP_CONFIG.styles.destino))
    // .pipe(browserSync.stream());
}

// ### scripts js 
function scriptsjs() {
    return gulp.src(GULP_CONFIG.scriptsjs.origen)
        // .pipe(babel()) // si desea usarlo
        // .pipe(plugins.uglify(GULP_CONFIG.scriptsjs.uglify))
        // .pipe(plugins.concat(GULP_CONFIG.scriptsjs.concat))
        .pipe(gulp.dest(GULP_CONFIG.scriptsjs.destino));
}

// ### html
function htmls() {
    return gulp.src(GULP_CONFIG.htmls.origen)
        .pipe(plugins.changed(GULP_CONFIG.htmls.destino))
        .pipe(gulp.dest(GULP_CONFIG.htmls.destino));
}

// // ### fonts
function fonts() {
    return gulp.src(GULP_CONFIG.fonts.origen)
        .pipe(plugins.changed(GULP_CONFIG.fonts.destino))
        .pipe(gulp.dest(GULP_CONFIG.fonts.destino));
}

// ### imagen
function imagen() {
    return gulp.src(GULP_CONFIG.imagen.origen)
        .pipe(plugins.imagemin(GULP_CONFIG.imagen.imagemin))
        .pipe(gulp.dest(GULP_CONFIG.imagen.destino));
}

// ### extras
function extras() {
    return gulp.src(GULP_CONFIG.extras.origen, {
            allowEmpty: true
        })
        .pipe(plugins.changed(GULP_CONFIG.extras.destino))
        .pipe(gulp.dest(GULP_CONFIG.extras.destino));
}

// ### imagen mover
function moverimagen() {
    return gulp.src(GULP_CONFIG.imagen.origen)
        .pipe(plugins.changed(GULP_CONFIG.imagen.destino))
        .pipe(gulp.dest(GULP_CONFIG.imagen.destino));
}

// ### watch
function watch() {
    browserSync.init(GULP_CONFIG.browsersync);
    gulp.watch(GULP_CONFIG.styles.origen, styles);
    gulp.watch(GULP_CONFIG.htmls.origen, htmls).on('change', browserSync.reload);
    gulp.watch(GULP_CONFIG.scriptsjs.origen, scriptsjs);
    gulp.watch(GULP_CONFIG.fonts.origen, fonts);
    gulp.watch(GULP_CONFIG.imagen.origen, moverimagen);
}

exports.clean = clean;
exports.htmls = htmls;
exports.fonts = fonts;
exports.imagen = imagen;
exports.watch = watch;
exports.styles = styles;
exports.scriptsjs = scriptsjs;
exports.moverimagen = moverimagen;
exports.extras = extras;

///
var build = gulp.series(clean, gulp.parallel(htmls, fonts, styles, scriptsjs, extras, moverimagen), watch);
var produccion = gulp.series(clean, gulp.parallel(htmls, fonts, styles, scriptsjs, extras, imagen));
gulp.task('build', build);
gulp.task('produccion', produccion);
gulp.task('default', build);