@extends('components.container.contain-action-8')
@section('wc_content_action')
<form id="" name="frmregister" class="form-horizontal col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" role="form" method='post' enctype='multipart/form-data' action="{!! route('wc.register.post') !!}" >
    <div class="form-group text-center">
        <h3>Đăng ký</h3>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >
            Họ <span class="wc-color-red">*</span>:
        </label>
        <div class="col-lg-9">
            <input id="txtFristName" class="form-control" type="text" name="txtFrisrName" placeholder="Họ và tên lót" value="" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >
            Tên <span class="wc-color-red">*</span>:
        </label>
        <div class="col-lg-9">
            <input id="txtLastName" class="form-control" type="text" name="txtLastName" placeholder="Tên" value="" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >
            Tài khoản <span class="wc-color-red">*</span> :
        </label>
        <div  class="col-lg-9">
            <input id="txtAccount" class="form-control" placeholder="Tài khoản là địa chỉ email" onblur="" type="email" name="txtAccount" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">
            Mật khẩu <span class="wc-color-red">*</span> :
        </label>
        <div class="col-lg-9">
            <input id="txtPass" class="form-control" type="password" name="txtPass" placeholder="Lớn hơn 6 ký tự" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">
            Nhập lại mật khẩu<span class="wc-color-red">*</span> :
        </label>
        <div  class="col-lg-9">
            <input id="txtConfirm" class="form-control" type="password" name="txtConfirm" placeholder="Xác nhận mật khẩu" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">
            Ngày sinh <span class="wc-color-red">*</span> :
        </label>
        <div  class="col-lg-9">
            <input id="txtBirthday" class="form-control" name="txtBirthday" value=""/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">
            Giới tính <span class="wc-color-red">*</span> :
        </label>
        <div  class="col-lg-9">
            <select id="txtGender" class="form-control" name="txtGender">
                <option value="">chọn</option>
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">
            Ảnh đại diện:
        </label>
        <div  class="col-lg-9">
            <input type="file" value=""/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-9 col-lg-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" checked="checked"> Tôi đã đọc và chấp nhận các <a href="#">điều khoản</a> của hệ thống wc0717.com
                </label>
            </div>
        </div>
    </div>
    <div id="regisAct" class="form-group text-center">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <input class="button wc-register-a wc-bg-5 wc-link" type="submit" name="resgister" value="Đăng ký" />
        <input class="button wc-bg-5 wc-link" type="reset"  name="reset" value="Nhập lại" />
        <input class="button wc-bg-5 wc-link" onclick="wc_remove('#wc_contain_action');" type="button" value="Đóng" />
    </div>
</form>
@endsection
<script src="{{ url('public/register/js/register.js')}}"></script>