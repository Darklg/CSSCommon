
/* Init PhantomCSS */
var phantomCSS = require('node_modules/phantomcss/phantomcss.js');
phantomCSS.init({
    addLabelToFailedImage: false,
    libraryRoot: 'node_modules/phantomcss',
});

/* Start casper */
casper.start().viewport(1280, 800);

/* Test forms */
casper.thenOpen('http://git.dev/CSSCommon/index.php?p=cssc-forms', function() {
    phantomCSS.screenshot('#set_form_block', 'cssc_button');
    phantomCSS.screenshot('#cssc-forms-input li.box:first-child', 'cssc_form_field');
    phantomCSS.screenshot('#cssc-forms-twoboxes', 'cssc_form_twoboxes');
});

/* Generate PNG Diffs */
casper
    .then(function now_check_the_screenshots() {phantomCSS.compareAll();})
    .then(function end_it() {casper.test.done();})
    .run(function() {phantom.exit(phantomCSS.getExitStatus());});

