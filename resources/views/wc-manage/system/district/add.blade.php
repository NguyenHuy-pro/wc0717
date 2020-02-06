<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:42 PM
 */
$hFunction = new Hfunction();
$modelProvince = new \App\Models\WcManage\System\Province\WcProvince();
?>
@extends('wc-manage.system.index')
@section('wc_manage_system_content')
    <div class="col-md-12 text-center">
        <h3 class="wc-margin-30">Add district </h3>
    </div>
    <div class="col-md-12">
        <form id="frmSystemDistrictAdd" name="frmSystemDistrictAdd" class="col-md-8 col-md-offset-2"
              enctype="multipart/form-data" method="post" role="form"
              action="{!! route('wc.m.system.district.add.post') !!}">
            @if (Session::has('notifyAddDistrict'))
                <div class="form-group text-center wc-color-red">
                    {!! Session::get('notifyAddDistrict') !!}
                    <?php
                    Session::forget('notifyAddDistrict');
                    ?>
                </div>
            @endif
            <div class="form-group">
                <label class="control-label">Province <span class="wc-color-red">*</span>:</label>
                <select class="form-control" name="cbProvince">
                    <option value="">Select</option>
                    {!! $modelProvince->getOption() !!}
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                <input type="text" class="form-control" name="txtName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button type="button" class="wc_m_system_district_add_post btn btn-default">Save</button>
                <button type="reset" class="btn btn-default">Reset</button>
                <a href="{!! route('wc.m.system.district.list.get') !!}">
                    <button type="button" class="btn btn-default">Close</button>
                </a>
            </div>
        </form>
    </div>
@endsection
@section('wc_manage_js_page_footer')
    <script type="text/javascript" src="{{ url('public/wcManage/system/district/js/district.js')}}"></script>
@endsection
