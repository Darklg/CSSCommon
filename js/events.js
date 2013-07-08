window.addEvent('domready', function() {
    set_forms_actions();
});

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