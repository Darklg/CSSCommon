/* Init PhantomCSS */
var phantomCSS = require('./node_modules/phantomcss/phantomcss.js');
phantomCSS.init({
    addLabelToFailedImage: false,
    libraryRoot: './node_modules/phantomcss/',
});

/* Start casper */
casper.start().viewport(1280, 800);

/* Test content */
casper.thenOpen('http://git.dev/CSSCommon/', function() {
    phantomCSS.screenshot('#cssc-content-text', 'cssc_content_text');
    phantomCSS.screenshot('#cssc-content-titles-quotes-labels', 'cssc_content_titles_quotes_labels');
});

/* Test forms */
casper.thenOpen('http://git.dev/CSSCommon/index.php?p=cssc-forms', function() {
    phantomCSS.screenshot('#set_form_block', 'cssc_button');
    phantomCSS.screenshot('#cssc-forms-input', 'cssc_form_boxes');
    phantomCSS.screenshot('#cssc-forms-twoboxes', 'cssc_form_twoboxes');
});

casper.then(function() {
    this.mouse.move('#set_form_block'); // Test for :hover
});
casper.then(function() {
    this.mouse.down('#set_form_block'); // Test for :active
});
casper.on('mouse.move', function(resource) {
    phantomCSS.screenshot('#set_form_block', 'cssc_button-hover');
});
casper.on('mouse.down', function(resource) {
    phantomCSS.screenshot('#set_form_block', 'cssc_button-active');
});

/* Generate PNG Diffs */
casper
    .then(function now_check_the_screenshots() {
        phantomCSS.compareAll();
    })
    .then(function end_it() {
        casper.test.done();
    })
    .run(function() {
        phantom.exit(phantomCSS.getExitStatus());
    });