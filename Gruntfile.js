module.exports = function(grunt) {

    grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            css: {
                src: [
                    'css/cssc-default.css',
                    'css/cssc-common.css',
                    'css/cssc-content.css',
                    'css/cssc-buttons.css',
                    'css/cssc-forms.css',
                    'css/cssc-tables.css',
                    'css/cssc-grid.css',
                    'css/cssc-push.css',
                    'css/cssc-navigation.css',
                    'css/cssc-layouts.css',
                    'css/cssc-tabs.css',
                    'css/cssc-images.css',
                    'css/cssc-print.css',
                    'css/cssc-effects.css',
                    'css/cssc-triggers.css'
                ],
                dest: 'csscommon.css'
            },
        },
        cssmin: {
            css: {
                src: 'csscommon.css',
                dest: 'csscommon.min.css'
            }
        },
        shell: {
            regressiontest: {
                command: 'casperjs test casper.js'
            },
            postuglify: {
                command: 'rm csscommon.css;',
                stdout: true
            }
        }
    });
    grunt.registerTask('default', [
        'concat:css',
        'cssmin:css',
        'shell:postuglify'
    ]);
};