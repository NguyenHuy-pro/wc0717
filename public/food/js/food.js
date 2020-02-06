$(document).ready(function() {
    hWindow = window.innerHeight;//screen.height;
    wWindow = window.innerWidth;//screen.height;
    $('#build-content').css('height',hWindow - 36);

    $('#tf-mini-map').mouseover(function(){
        $('#tf-mini-content').show();
    }).mouseout(function(){
        $('#tf-mini-content').hide();
    });
});