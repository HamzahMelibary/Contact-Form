$('input').blur(function(){
    tmpval = $(this).val();
    if(tmpval == '') {
        $(this).addClass('boobo');
        $(this).removeClass('boobo');
    } else {
        $(this).addClass('boobo');
        $(this).removeClass('boobo');
    }
});