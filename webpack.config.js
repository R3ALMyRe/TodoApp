const Encore = require('@symfony/webpack-encore');

Encore
    // le répertoire où les fichiers compilés seront enregistrés
    .setOutputPath('public/build/')
    // le répertoire où les fichiers de la source sont enregistrés
    .setPublicPath('/build')
    // active les fonctionnalités comme la gestion des CSS, JS, etc.
    .enableSassLoader()
    .enablePostCssLoader()
    .addEntry('app', './assets/app.js')
    .enableSourceMaps(!Encore.isProduction());

module.exports = Encore.getWebpackConfig();
