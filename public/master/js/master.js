var wcMaster = {
    closeAction:function(){
        wcMain.hide('#wcContainAction');
        wcMain.remove('#wcContainAction');
    }
}

//========== ========== Start ========== ==========
$(document).ready(function() {
    windowHeight = window.innerHeight;//screen.height;
    windowWidth = window.innerWidth;//screen.height;
    $('#wcMasterContent').css('height',windowHeight);
    //$('#wc_contain_action').css('height',windowWidth);
    $('#wcContainerActionMask').on('click', function(){
        wcMaster.closeAction();
    });
    autosize(document.querySelectorAll('textarea'));
});

//========== ========== menu ========== ==========
$(document).ready(function(){
    //open news
    $('#wcMasterWrapper').on('click', '.wcMasterMenu .wcNews', function(){
        wcMain.hide('#wcMasterControl');
        wcMain.toggle('#wcMasterNews');
    });

    //wcControl
    $('#wcMasterWrapper').on('click', '.wcMasterMenu .wcControl', function(){
        wcMain.hide('#wcMasterNews');
        wcMain.toggle('#wcMasterControl');
    });
});
