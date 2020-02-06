function wc_moveWall(t){
    //trend = $(this).attr('class');
    vtop = $('#wc-district').position().top;
    vleft = $('#wc-district').position().left;
    if(t == 't'){
        $('#wc-district').css('top',vtop + 900);
    }
    if(t == 'r'){
        $('#wc-district').css('left',vleft - 900);
    }
    if(t == 'c'){
        $('#wc-district').css({'top':0,'left':0});
    }
    if(t == 'b'){
        $('#wc-district').css('top',vtop - 900);
    }
    if(t == 'l'){
        $('#wc-district').css('left',vleft + 900);
    }
}