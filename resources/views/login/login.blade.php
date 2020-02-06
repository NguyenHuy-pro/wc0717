@extends('components.container.contain-action-6')
@section('wc_content_action')
    <form id="" name="frmregister" class="form-horizontal col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" role="form" method='post' enctype='multipart/form-data' action="" >
        <div class="form-group">
            <div  class="col-sm-12 col-md-12 text-center">
                <h4>Thông tin đăng nhập</h4>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label" >
                Tài khoản :
            </label>
            <div  class="col-lg-9">
                <input id="txtAccount" class="form-control" placeholder="Tài khoản là địa chỉ email" onblur="" type="email" name="txtAccount" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">
                Mật khẩu:
            </label>
            <div class="col-lg-9">
                <input id="txtPass" class="form-control" type="password" name="txtPass" placeholder="Nhập mật khẩu" />
            </div>
        </div>
        <div id="regisAct" class="form-group text-center">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <input class="button wc-login-a wc-bg-5 wc-link" type="button" name="resgister" value="Đăng nhập" />
            <input class="button wc-bg-5 wc-link" onclick="wc_remove('#wc_contain_action');" type="button" value="Đóng" />
        </div>
    </form>
@endsection
<script src="{{ url('public/login/js/login.js')}}"></script>