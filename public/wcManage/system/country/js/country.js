/**
 * Created by HUY on 8/19/2016.
 */
var wcSystemCountry = {
    add: {
        checkInfo: function () {
            var formAdd = $("#frmSysCountryAdd");
            var txtName = formAdd.find("input[name= 'txtName']");
            var txtCode = formAdd.find("input[name= 'txtCode']");
            var txtMoney = formAdd.find("input[name= 'txtMoney']");
            var txtFlag = formAdd.find("input[name= 'txtFlag']");

            if (wcMain.check.inputNull(txtName, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtName, 30, 'Limit of name length 30 characters')) return false;
            }
            if (wcMain.check.inputNull(txtCode, 'Enter Code of country')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtCode, 10, 'Limit of code length 10 characters')) return false;
            }
            if (wcMain.check.inputNull(txtMoney, 'Enter money unit of country')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtMoney, 20, 'Limit of money length 20 characters')) return false;
            }
            if (wcMain.check.inputNull(txtFlag, 'Select flag of country')) {
                return false;
            }
            wcManage.submit.ajaxFormHasReload(formAdd, '#wc_m_system_country_add_notify', true);
        }
    },
    edit: {
        getFormEdit: function (href, countryId) {
            href = href + '/' + countryId;
            wcManage.submit.ajaxNotReload(href, '#wc_manage_wrap', false);
        },
        checkInfo: function () {
            var formEdit = $("#frmSysCountryEdit");
            var txtName = formEdit.find("input[name= 'txtName']");
            var txtCode = formEdit.find("input[name= 'txtCode']");
            var txtMoney = formEdit.find("input[name= 'txtMoney']");
            var txtFlag = formEdit.find("input[name= 'txtFlag']");

            if (wcMain.check.inputNull(txtName, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtName, 30, 'Limit of name length 30 characters')) return false;
            }
            if (wcMain.check.inputNull(txtCode, 'Enter Code of country')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtCode, 10, 'Limit of code length 10 characters')) return false;
            }
            if (wcMain.check.inputNull(txtMoney, 'Enter money unit of country')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtMoney, 20, 'Limit of money length 20 characters')) return false;
            }
            wcManage.submit.ajaxFormHasReload(formEdit, '#wc_m_sys_country_edit_notify', true);
        }
    },
    updateStatus: function (href, countryId, status) {
        href = href + '/' + countryId + '/' + status;
        wcManage.submit.ajaxHasReload(href, '', false);
    },
    delete: function (href, countryId) {
        href = href + '/' + countryId;
        wcManage.submit.ajaxHasReload(href, '', false);
    }
}
//----------- ------------ ------------ add country ----------- ------------ ------------
$(document).ready(function () {
    // check add new
    $('.wc_m_system_country_add_post').on('click', function () {
        wcSystemCountry.add.checkInfo();
    });
});

//----------- ------------ ------------ edit country ----------- ------------ ------------
$(document).ready(function () {
    //get edit
    $('.wc_m_system_country_edit').on('click', function () {
        var countryId = $(this).parents('.wc_m_system_country_object').data('country');
        var href = $(this).parents('.wc_m_system_contain_country').data('href-edit') + '/' + countryId;
        wcSystemCountry.edit.getFormEdit(href, countryId);
    });

    // check edit info
    $('body').on('click', '.wc_m_system_country_edit_post', function () {
        wcSystemCountry.edit.checkInfo();
    });
});

//----------- ------------ ------------ update country ----------- ------------ ------------
//update status
$(document).ready(function () {
    $('.wc_m_system_country_status').on('click', function () {
        var status = $(this).data('status');
        var countryId = $(this).parents('.wc_m_system_country_object').data('country');
        var href = $(this).parents('.wc_m_system_contain_country').data('href-status');
        wcSystemCountry.updateStatus(href, countryId, status);
    });
});

//delete
$(document).ready(function () {
    $('.wc_m_system_country_delete').on('click', function () {
        if (confirm('Do you want to delete?')) {
            var countryId = $(this).parents('.wc_m_system_country_object').data('country');
            var href = $(this).parents('.wc_m_system_contain_country').data('href-delete');
            wcSystemCountry.delete(href, countryId);
        }
    });
});