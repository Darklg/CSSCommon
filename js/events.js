window.addEvent('domready', function() {
    set_show_html_buttons();
    set_forms_actions();
    set_demo_tabs();
});

/* ----------------------------------------------------------
  Show HTML
---------------------------------------------------------- */

var set_show_html_buttons = function() {
    $$('.show-html-button').each(function(el) {
        var target = $$(el.get('href'));
        if (!target) {
            return;
        }
        target.setStyles({
            'display': 'none'
        });
        el.addEvent('click', function(e) {
            e.preventDefault();
            $$($(this).get('href')).setStyles({
                'display': 'block'
            });
            $(this).remove();
        });
    });
};

/* ----------------------------------------------------------
  Buttons for demo form
---------------------------------------------------------- */

var set_forms_actions = function() {
    if (!$('form_demo')) {
        return;
    }

    if ($('set_form_float')) {
        $('set_form_float').addEvent('click', function() {
            $('form_demo').className = 'cssc-form float-form';
        });
    }
    if ($('set_form_block')) {
        $('set_form_block').addEvent('click', function() {
            $('form_demo').className = 'cssc-form block-form';
        });
    }
    if ($('set_form_wide')) {
        $('set_form_wide').addEvent('click', function() {
            $('form_demo').setStyles({
                'max-width': '100%'
            });
        });
    }
    if ($('set_form_normal')) {
        $('set_form_normal').addEvent('click', function() {
            $('form_demo').setStyles({
                'max-width': '450px'
            });
        });
    }
};

/* ----------------------------------------------------------
  Demo tabs
---------------------------------------------------------- */

var set_demo_tabs = function() {
    new dkJSUTabs({
        triggers: $$('.cssc-tabs-clic > li'),
        targets: $$('.cssc-tabs-target > li')
    });
};