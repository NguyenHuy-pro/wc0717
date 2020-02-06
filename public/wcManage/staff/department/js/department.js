/**
 * Created by HUY on 8/28/2016.
 */
//----------- ------------ ------------ add department ----------- ------------ ------------
$(document).ready(function () {
    // check add new
    $('.wc_m_staff_department_add_post').on('click', function () {
        var txtName = $("#frmSysDepartmentAdd").find("input[name= 'txtName']");
        var txtCode = $("#frmSysDepartmentAdd").find("input[name= 'txtCode']");

        if(wcMain.check.inputNull(txtName, 'Enter name')) {
            return false;
        } else {
            if (wcMain.check.inputMaxLength(txtName, 30, 'Limit of name length 30 characters')) return false;
        }
        if (wcMain.check.inputNull(txtCode, 'Enter Code of department')) {
            return false;
        } else {
            if (wcMain.check.inputMaxLength(txtCode, 20, 'Limit of code length 20 characters')) return false;
        }
        wcManage.submit.normalForm('#frmSysDepartmentAdd');
    });
});

//----------- ------------ ------------ edit country ----------- ------------ ------------
$(document).ready(function(){
    //get edit
    $('.wc_m_staff_department_edit').on('click', function(){
        var countryId = $(this).parents('.wc_m_staff_department_object').data('department');
        var href = $(this).parents('.wc_m_staff_department_contain').data('href-edit');
        href = href + '/' + countryId;
        wcManage.submit.ajaxNotReload(href,'#wc_manage_wrap',false);
    });

    // check edit info
    $('body').on('click', '.wc_m_staff_department_edit_post', function () {
        var txtName = $("#frmSysDepartmentEdit").find("input[name= 'txtName']");
        var txtCode = $("#frmSysDepartmentEdit").find("input[name= 'txtCode']");

        if(wcMain.check.inputNull(txtName, 'Enter name')) {
            return false;
        } else {
            if (wcMain.check.inputMaxLength(txtName, 30, 'Limit of name length 30 characters')) return false;
        }
        if (wcMain.check.inputNull(txtCode, 'Enter Code of department')) {
            return false;
        } else {
            if (wcMain.check.inputMaxLength(txtCode, 20, 'Limit of code length 20 characters')) return false;
        }
        wcManage.submit.ajaxFormHasReload('#frmSysDepartmentEdit','#wc_m_staff_department_edit_notify',true);
    });
});

//----------- ------------ ------------ update department ----------- ------------ ------------
//update status
$(document).ready(function(){
    $('.wc_m_staff_department_status').on('click', function(){
        var status = $(this).data('status');
        var departmentId = $(this).parents('.wc_m_staff_department_object').data('department');
        var href = $(this).parents('.wc_m_staff_department_contain').data('href-status');
        href = href + '/' + departmentId + '/' + status;
        wcManage.submit.ajaxHasReload(href,'',false);
    });
});

//delete
$(document).ready(function(){
    $('.wc_m_staff_department_delete').on('click', function(){
        if(confirm('Do you want to delete?')){
            var departmentId = $(this).parents('.wc_m_staff_department_object').data('department');
            var href = $(this).parents('.wc_m_staff_department_contain').data('href-delete');
            href = href + '/' + departmentId;
            wcManage.submit.ajaxHasReload(href,'',false);
        }
    });
});