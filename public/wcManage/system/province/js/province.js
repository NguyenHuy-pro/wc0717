/**
 * Created by HUY on 9/6/2016.
 */
var wcSystemProvince = {
    add: {
        checkInfo: function () {
            var formAdd = $("#frmSystemProvinceAdd");
            var country = formAdd.find("select[name= 'cbCountry']");
            var type = formAdd.find("select[name= 'cbProvinceType']");

            var name = formAdd.find("input[name= 'txtName']");

            if (wcMain.check.inputNull(country, 'Select a country for province')) {
                return false;
            }
            if (wcMain.check.inputNull(type, 'select a province type')) {
                return false;
            }
            if (wcMain.check.inputNull(name, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(name, 30, 'Limit of name length 30 characters')) return false;
            }
            wcManage.submit.normalForm(formAdd);
        }
    },
    edit: {
        getFormEdit: function (href, provinceId) {
            href = href + '/' + provinceId;
            wcManage.submit.ajaxNotReload(href, '#wc_manage_wrap', false);
        },
        checkInfo: function () {
            var formEdit = $("#frmSystemProvinceEdit");
            var country = formEdit.find("select[name= 'cbCountry']");
            var type = formEdit.find("select[name= 'cbProvinceType']");

            var name = formEdit.find("input[name= 'txtName']");

            if (wcMain.check.inputNull(country, 'Select a country for province')) {
                return false;
            }
            if (wcMain.check.inputNull(type, 'select a province type')) {
                return false;
            }
            if (wcMain.check.inputNull(name, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(name, 30, 'Limit of name length 30 characters')) return false;
            }
            wcManage.submit.ajaxFormHasReload(formEdit,'#wc_m_system_province_edit_notify',true);
        }
    },
    updateStatus: function (href, provinceId, status) {
        href = href + '/' + provinceId + '/' + status;
        wcManage.submit.ajaxHasReload(href, '', false);
    },
    delete: function (href, provinceId) {
        href = href + '/' + provinceId;
        wcManage.submit.ajaxHasReload(href, '', false);
    }
}
//----------- ------------ ------------ add province ----------- ------------ ------------
$(document).ready(function () {
    // check add new
    $('.wc_m_system_province_add_post').on('click', function () {
        wcSystemProvince.add.checkInfo();
    });
});

//----------- ------------ ------------ edit province ----------- ------------ ------------
$(document).ready(function () {
    //get edit
    $('.wc_m_system_province_edit').on('click', function () {
        var provinceId = $(this).parents('.wc_m_system_province_object').data('province');
        var href = $(this).parents('.wc_m_system_contain_province').data('href-edit');
        wcSystemProvince.edit.getFormEdit(href, provinceId);
    });

    // check edit info
    $('body').on('click', '.wc_m_system_province_edit_post', function () {
        wcSystemProvince.edit.checkInfo();
    });
});

//----------- ------------ ------------ update ----------- ------------ ------------
//update status
$(document).ready(function () {
    $('.wc_m_system_province_status').on('click', function () {
        var status = $(this).data('status');
        var provinceId = $(this).parents('.wc_m_system_province_object').data('province');
        var href = $(this).parents('.wc_m_system_contain_province').data('href-status');
        wcSystemProvince.updateStatus(href, provinceId, status);

    });
});

//delete
$(document).ready(function () {
    $('.wc_m_system_province_delete').on('click', function () {
        if (confirm('Do you want to delete?')) {
            var provinceId = $(this).parents('.wc_m_system_province_object').data('province');
            var href = $(this).parents('.wc_m_system_contain_province').data('href-delete');
            wcSystemProvince.delete(href, provinceId);
        }
    });
});