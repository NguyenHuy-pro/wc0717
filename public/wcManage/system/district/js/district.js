/**
 * Created by HUY on 9/6/2016.
 */
var wcSystemDistrict = {
    add: {
        checkInfo: function () {
            var formAdd = $("#frmSystemDistrictAdd");
            var province = formAdd.find("select[name= 'cbProvince']");

            var name = formAdd.find("input[name= 'txtName']");
            if (wcMain.check.inputNull(province, 'select a province')) {
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
        getFormEdit: function (href, districtId) {
            href = href + '/' + districtId;
            wcManage.submit.ajaxNotReload(href, '#wc_manage_wrap', false);
        },
        checkInfo: function () {
            var formEdit = $("#frmSystemDistrictEdit");
            var province = formEdit.find("select[name= 'cbProvince']");

            var name = formEdit.find("input[name= 'txtName']");

            if (wcMain.check.inputNull(province, 'Select a province for district')) {
                return false;
            }
            if (wcMain.check.inputNull(name, 'Enter name')) {
                return false;
            } else {
                if (wcMain.check.inputMaxLength(name, 30, 'Limit of name length 30 characters')) return false;
            }
            wcManage.submit.ajaxFormHasReload(formEdit,'#wc_m_system_district_edit_notify',true);
        }
    },
    updateStatus: function (href, districtId, status) {
        href = href + '/' + districtId + '/' + status;
        wcManage.submit.ajaxHasReload(href, '', false);
    },
    delete: function (href, districtId) {
        href = href + '/' + districtId;
        wcManage.submit.ajaxHasReload(href, '', false);
    }
}
//----------- ------------ ------------ add district ----------- ------------ ------------
$(document).ready(function () {
    // check add new
    $('.wc_m_system_district_add_post').on('click', function () {
        wcSystemDistrict.add.checkInfo();
    });
});

//----------- ------------ ------------ edit district ----------- ------------ ------------
$(document).ready(function () {
    //get edit
    $('.wc_m_system_district_edit').on('click', function () {
        var districtId = $(this).parents('.wc_m_system_district_object').data('district');
        var href = $(this).parents('.wc_m_system_contain_district').data('href-edit');
        wcSystemDistrict.edit.getFormEdit(href, districtId);
    });

    // check edit info
    $('body').on('click', '.wc_m_system_district_edit_post', function () {
        wcSystemDistrict.edit.checkInfo();
    });
});

//----------- ------------ ------------ update ----------- ------------ ------------
//update status
$(document).ready(function () {
    $('.wc_m_system_district_status').on('click', function () {
        var status = $(this).data('status');
        var districtId = $(this).parents('.wc_m_system_district_object').data('district');
        var href = $(this).parents('.wc_m_system_contain_district').data('href-status');
        wcSystemDistrict.updateStatus(href, districtId, status);

    });
});

//delete
$(document).ready(function () {
    $('.wc_m_system_district_delete').on('click', function () {
        if (confirm('Do you want to delete?')) {
            var districtId = $(this).parents('.wc_m_system_district_object').data('district');
            var href = $(this).parents('.wc_m_system_contain_district').data('href-delete');
            wcSystemDistrict.delete(href, districtId);
        }
    });
});