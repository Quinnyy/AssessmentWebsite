$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'create_health.php',
            data =  {'action': clickBtnValue};
    });

});