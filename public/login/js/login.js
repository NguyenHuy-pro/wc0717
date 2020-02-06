/**
 * Created by HUY on 5/7/2016.
 */
$(document).ready(function(){
    $('.wc-login-a').on('click',function(){
        a = $('#txtAccount').val(); // get account
        p = $('#txtPass').val(); // get password
        if(a == ''){
            alert('Bạn phải nhập tài khoản');
            $('#txtAccount').focus();
            return false;
        }
        if(p == ''){
            alert('Bạn phải nhập mật khẩu');
            $('#txtPass').focus();
            return false;
        }
        alert('Yes');
    }) ;
});