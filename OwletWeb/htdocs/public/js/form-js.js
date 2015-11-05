$(".responsive_form_container input,.responsive_form_container textarea").click(function(){
    $(this).animate({
        marginTop:'30px',
        opacity:'1',
        borderWidth:'2'
    });
});

$(".responsive_form_container input,.responsive_form_container textarea").blur(function(){
    $(this).animate({
        marginTop:'30px',
        opacity:'3',
        borderWidth:'1'
    });

    if($(this).val() == '') {
        $(this).animate({
        marginTop:'0px'
        });
    }

});