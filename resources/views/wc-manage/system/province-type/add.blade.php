<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:42 PM
 */
$hFunction = new Hfunction();
?>
@extends('wc-manage.system.index')
@section('wc_manage_system_content')
    <div class="col-md-12 text-center">
        <h3 class="wc-margin-30">Add province type</h3>
    </div>
    <div class="col-md-12">
        <form id="frmSysProvinceTypeAdd" name="frmSysProvinceTypeAdd" class="col-md-8 col-md-offset-2"
              enctype="multipart/form-data" method="post" role="form"
              action="{!! route('wc.m.system.provinceType.add.post') !!}">
            @if (Session::has('notifyAddProvinceType'))
                <div class="form-group text-center wc-color-red">
                    {!! Session::get('notifyAddProvinceType') !!}
                    <?php
                    Session::forget('notifyAddProvinceType');
                    ?>
                </div>
            @endif
            <div class="form-group">
                <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                <input type="text" class="form-control" name="txtName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button type="button" class="wc_m_system_province_type_add_post btn btn-default">Save</button>
                <button type="reset" class="btn btn-default">Reset</button>
                <a href="{!! route('wc.m.system.provinceType.list.get') !!}">
                    <button type="button" class="btn btn-default">Close</button>
                </a>
            </div>
        </form>
    </div>
@endsection
@section('wc_manage_js_page_footer')
    <script type="text/javascript" src="{{ url('public/wcManage/system/province-type/js/province-type.js')}}"></script>
@endsection
