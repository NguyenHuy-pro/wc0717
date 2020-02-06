/**
 * Created by HUY on 5/8/2016.
 */
//========== ========== ========== Manage Object ========== ========== ==========
//---------- ---------- General ---------- ---------
var wcManage = {
    loadStatus: function () {
        wcMain.toggle('.wc_m_load_status');
    },
    containActionClose: function () {
        wcMain.remove('#wc_m_contain_action_wrap');
    },
    remove:{
        containWrapParent:function(object){
            $(object).parents('.wc_m_container_wrap').remove();
        },
        containWrapAll:function(){
            wcMain.remove('.wc_m_container_wrap');
        }
    },
    close:{
        containWrapParent:function(object){
            $(object).parents('.wc_m_container_wrap').hide();
        },
        containWrapAll:function(){
            wcMain.hide('.wc_m_container_wrap');
        }
    },
    submit:{
        ajaxNotReload: function (href, containResponse, empty) {
            $.ajax({
                url: href,
                type: 'GET',
                cache: false,
                data: {},
                beforeSend: function () {
                    wcManage.loadStatus();
                },
                success: function (data) {
                    wcManage.containActionClose();
                    if (data) {
                        if (containResponse.length > 0) {
                            if(empty) wcMain.empty(containResponse);
                            $(containResponse).append(data);
                        }
                    }
                },
                complete: function () {
                    wcManage.loadStatus();
                }
            });
        },
        ajaxNotReloadHasRemove: function (href, containResponse, empty,removeObject) {
            $.ajax({
                url: href,
                type: 'GET',
                cache: false,
                data: {},
                beforeSend: function () {
                    wcManage.loadStatus();
                },
                success: function (data) {
                    wcManage.containActionClose();
                    wcMain.remove(removeObject);
                    if (data) {
                        if (containResponse.length > 0) {
                            if(empty) wcMain.empty(containResponse);
                            $(containResponse).append(data);
                        }else{
                            alert(data);
                        }
                    }
                },
                complete: function () {
                    wcManage.loadStatus();
                }
            });
        },
        ajaxHasReload: function (href, containResponse, empty) {
            $.ajax({
                url: href,
                type: 'GET',
                cache: false,
                data: {},
                beforeSend: function () {
                    wcManage.loadStatus();
                },
                success: function (data) {
                    if (data) {
                        if (containResponse.length > 0) {
                            if(empty) wcMain.empty(containResponse);
                            $(containResponse).append(data);
                        } else {
                            //alert(data);
                            wcMain.window.reload();
                        }
                    } else {
                        wcMain.window.reload();
                    }
                },
                complete: function () {
                    wcManage.loadStatus();
                }
            });
        },
        ajaxFormNotReload: function (form, containResponse, empty) {
            $(form).ajaxForm({
                beforeSend: function () {
                    wcManage.loadStatus();
                },
                success: function (data) {
                    if (data) {
                        if (containResponse.length > 0) {
                            if (empty) wcMain.empty(containResponse);
                            $(containResponse).append(data);
                        } else {
                            //alert(data);
                        }
                    }
                },
                complete: function () {
                    wcManage.containActionClose();
                    wcManage.loadStatus();
                }
            }).submit();
        },
        ajaxFormNotReloadHasRemove: function (form, containResponse, empty, removeObject) {
            $(form).ajaxForm({
                beforeSend: function () {
                    wcManage.loadStatus();
                },
                success: function (data) {
                    wcMain.remove(removeObject);
                    if (data) {
                        if (containResponse.length > 0) {
                            if (empty) wcMain.empty(containResponse);
                            $(containResponse).append(data);
                        } else {
                            alert(data);
                        }
                    }
                },
                complete: function () {
                    wcManage.containActionClose();
                    wcManage.loadStatus();
                }
            }).submit();
        },
        ajaxFormHasReload: function (form, containResponse, empty) {
            $(form).ajaxForm({
                beforeSend: function () {
                    wcManage.loadStatus();
                },
                success: function (data) {
                    if (data) {
                        if (containResponse.length > 0) {
                            if (empty) wcMain.empty(containResponse);
                            $(containResponse).append(data);
                        } else {
                            alert(data);
                        }
                    } else {
                        wcMain.window.reload();
                    }
                },
                complete: function () {
                    wcManage.loadStatus();
                }
            }).submit();
        },
        normalForm: function (form) {
            $(form).submit();
        }
    }
};

//========== ========== ========== Action ========== ========== ==========
$(document).ready(function () {
    hWindow = window.innerHeight;//screen.height;
    wWindow = window.innerWidth;//screen.height;

    //control panel
    $('#wc_m_panel').css('height', hWindow);

    // master
    $('#wc_manage_wrap').css('min-height', hWindow);
});

//------------ ------------ close contain box ---------- ----------
$(document).ready(function () {
    //only remove parent
    $('body').on('click', '.wc_m_container_parent_remove', function () {
        wcManage.remove.containWrapParent(this);
    });

    // remove all contain
    $('body').on('click', '.wc_m_container_all_remove', function () {
        wcManage.remove.containWrapAll();
    });

    //only hide parent
    $('body').on('click', '.wc_m_container_parent_remove', function () {
        wcManage.close.containWrapParent(this);
    });

    // hide all contain
    $('body').on('click', '.wc_m_container_all_remove', function () {
        wcManage.close.containWrapAll();
    });

    //contain action
    $('body').on('click', '.wc_m_contain_action_close', function () {
        wcManage.containActionClose();
    });
});