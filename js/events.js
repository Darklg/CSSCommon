
if($('set_form_float') && $('set_form_block') && $('set_form_wide') && $('set_form_block') && $('form_demo')){
    $('set_form_float').addEventListener('click',function(){
        $('form_demo').className = 'cssn_form float_form';
    }); 
    $('set_form_block').addEventListener('click',function(){
        $('form_demo').className = 'cssn_form block_form';
    }); 
    $('set_form_wide').addEventListener('click',function(){
        $('form_demo').style.maxWidth = '100%';
    });
    $('set_form_normal').addEventListener('click',function(){
        $('form_demo').style.maxWidth = '450px';
    });
}
