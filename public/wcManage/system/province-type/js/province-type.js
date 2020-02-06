/**
 * Created by HUY on 9/6/2016.
 */
var wcSystemProvinceType = {
    add: {
        checkInfo: function () {
            var formAdd = $("#frmSysProvinceTypeAdd");
            var txtName = formAdd.find("input[name= 'txtName']");

            if (wcMain.check.inputNull(txtName, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtName, 30, 'Limit of name length 30 characters')) return false;
            }
            wcManage.submit.normalForm(formAdd);
        }
    },
    edit: {
        getFormEdit: function (href, typeId) {
            href = href + '/' + typeId;
            wcManage.submit.ajaxNotReload(href, '#wc_manage_wrap', false);
        },
        checkInfo: function () {
            var formEdit = $("#frmSysProvinceTypeEdit");
            var txtName = formEdit.find("input[name= 'txtName']");
            if (wcMain.check.inputNull(txtName, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(txtName, 30, 'Limit of name length 30 characters')) return false;
            }
            wcManage.submit.ajaxFormHasReload(formEdit, '#wc_m_system_province_type_edit_notify', true);
        }
    },
    delete: function (href, typeId) {
        href = href + '/' + typeId;
        wcManage.submit.ajaxHasReload(href, '', false);
    }
}
//----------- ------------ ------------ add country ----------- ------------ ------------
$(document).ready(function () {
    // check add new
    $('.wc_m_system_province_type_add_post').on('click', function () {
        wcSystemProvinceType.add.checkInfo();
    });
});

//----------- ------------ ------------ edit info ----------- ------------ ------------
$(document).ready(function () {
    //get edit
    $('.wc_m_system_province_type_edit').on('click', function () {
        var typeId = $(this).parents('.wc_m_system_province_type_object').data('type');
        var href = $(this).parents('.wc_m_system_contain_province_type').data('href-edit');
        wcSystemProvinceType.edit.getFormEdit(href, typeId);
    });

    // check edit info
    $('body').on('click', '.wc_m_system_province_type_edit_post', function () {
        wcSystemProvinceType.edit.checkInfo();
    });
});

//----------- ------------ ------------ update country ----------- ------------ ------------
//delete
$(document).ready(function () {
    $('.wc_m_system_province_type_delete').on('click', function () {
        if (confirm('Do you want to delete?')) {
            var typeId = $(this).parents('.wc_m_system_province_type_object').data('type');
            var href = $(this).parents('.wc_m_system_contain_province_type').data('href-delete');
            wcSystemProvinceType.delete(href, href);
        }
    });
});
