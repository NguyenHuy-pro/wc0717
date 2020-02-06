/**
 * Created by HUY on 5/7/2016.
 */
$(document).ready(function(){
    $('.wc-register-a').on('click',function(){
        fName = $('#txtFristName').val();
        lName = $('#txtLastName').val();
        account = $('#txtAccount').val();
        pass = $('#txtPass').val();
        confirm = $('#txtConfirm').val();
        birthday = $('#txtBirthday').val();
        gender = $('#txtGender').val();
        if(fName == ''){
            alert('Bạn phải nhập họ');
            $('#txtFristName').focus();
            return false;
        }else{
            if(fName.length > 20){
                alert('Họ không quá 20 ký tự');
                $('#txtFristName').focus();
                return false;
            }
        }
        if(lName == ''){
            alert('Bạn phải nhập tên');
            $('#txtLastName').focus();
            return false;
        }else{
            if(lName.length > 10){
                alert('Tên không quá 20 ký tự');
                $('#txtLastName').focus();
                return false;
            }
        }
        if(account == ''){
            alert('Bạn phải nhập tên tài khoản');
            $('#txtAccount').focus();
            return false;
        }else{
            if(!wc_checkEmail(account)){
                alert('Tài khoản là một email');
                $('#txtAccount').focus();
                return false;
            }
        }
        if(pass == ''){
            alert('Bạn phải nhập mật khẩu');
            $('#txtPass').focus();
            return false;
        }else{
            if(pass.length < 6){
                alert('Mật khẩu phải lớn hơn 6 ký tự');
                $('#txtPass').focus();
                return false;
            }
        }
        if(confirm == ''){
            alert('Bạn phải nhập xác nhận mật khẩu');
            $('#txtConfirm').focus();
            return false;
        }else{
            if(pass != confirm){
                alert('Mật khẩu xác nhận không đúng');
                $('#txtConfirm').focus();
                return false;
            }
        }
        if(birthday == ''){
            alert('Bạn phải nhập ngày sinh');
            $('#txtBirthday').focus();
            return false;
        }
        if(gender == ''){
            alert('Bạn phải chọn giới tính');
            $('#gender').focus();
            return false;
        }
    }) ;
});