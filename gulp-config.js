// Projecto paths
var project = 'fuentewp', // El nombre del directorio para tu tema; ¡Cambia esto por lo menos!
    homePATH = 'C:/www/fuente/', // path home
    src = homePATH + 'fuente/src/', // La materia prima de su tema 
    dist = homePATH + '/wordpress/wp-content/themes/' + project + '/', // El paquete de distribución que subirás a tu servidor
    proxySERVER = 'http://127.0.0.1/fuente/wordpress/', // server proxy url
    node_modules = homePATH + 'fuente/node_modules'; // Archivos y paquetes , npm packages

module.exports = {
    // path
    path: {
        origen: src,
        destino: dist,
    },
    // html files
    htmls: {
        origen: src + 'php/**/*(*.php|*.html|*.css)',
        destino: dist,
    },
    // font files
    fonts: {
        origen: src + 'fonts/**/*(*.eot|*.svg|*.ttf|*.woff|*.woff2)',
        destino: dist + 'fonts/',
    },

    // scriptsjs
    scriptsjs: {
        origen: src + 'js/**/*.js',
        destino: dist + 'js/',
        concat: {
            path: 'general.js',
            // newLine: ';',
        },
        uglify: {
            compress: false,
            warnings: false,
            mangle: false,
        },
    },

    // styles
    styles: {
        origen: src + 'scss/**/*.scss',
        destino: dist,
        cssnano: {
            autoprefixer: {
                add: true,
                browsers: ['> 3%', 'last 2 versions', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'] // This tool is magic and you should use it in all your projects :)
            },
            options: {
                sourcemap: true
            }

        },
        libsass: { // Requires the libsass implementation of Sass (included in this package)
            includePaths: [ // Adds Bower and npm directories to the load path so you can @import directly
                // node_modules + 'compass/',
                node_modules,
            ],
            precision: 6,
            onError: function (err) {
                return console.log(err);
            }
        }

    },
    // ### imagen
    imagen: {
        origen: [src + 'imagen/**/*(*.png|*.jpg|*.jpeg|*.gif|*.svg)', '!' + dist + 'screenshot.png'],
        destino: dist + 'imagen/',
        imagemin: {
            optimizationLevel: 7,
            progressive: true,
            interlaced: true
        },
    },

    // ### extras
    extras: {
        origen: [src + 'screenshot.png', src + 'robots.txt', src + 'favicon.ico'],
        destino: dist,
    },


    /// ### browsersync
    browsersync: {
        files: [dist + '**/*'], //  files
        // online: true, // online ( true o false )
        notify: false, // In-line notifications (the blocks of text saying whether you are connected to the BrowserSync server or not)
        // open: true, // Set to false if you don't like the browser window opening automatically
        // reloadOnRestart: true, ///   Recargue cada navegador cuando se reinicie Browsersync.
        injectChanges: true, // Commnet it to reload browser for every CSS change.
        // // port: 3030, // Port number for the live version of the site; default: 3000
        reloadDelay: 2000, // delay in milliseconds
        browser: ["firefox", "chrome"], // browser
        proxy: proxySERVER, // We need to use a proxy instead of the built-in server because WordPress has to do some server-side rendering for the theme to work
    },


} // fin module.exports