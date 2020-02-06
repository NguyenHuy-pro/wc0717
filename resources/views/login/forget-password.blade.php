@extends('components.container.contain-action-6')
@section('wc_content_action')
    <form id="" name="frmregister" class="form-horizontal col-lg-8 col-lg-offset-2" role="form" method='post' enctype='multipart/form-data' action="" >
        <div class="form-group text-center">
            <h3>Quên mật khẩu</h3>
        </div>
        <div class="form-group">
            <div  class="col-md-12">
                Tài khoản
                <input id="txtAccount" class="form-control" placeholder="Nhập tài khoản là địa chỉ email" onblur="" type="email" name="txtAccount" />
            </div>
        </div>
        <div id="regisAct" class="form-group text-center">
            <input class="button wc-bg-5 wc-link" type="button" name="resgister" value="Gửi" />
            <input class="button wc-bg-5 wc-link" onclick="wc_remove('#wc_contain_action');" type="button" value="Đóng" />
        </div>
    </form>
@endsection