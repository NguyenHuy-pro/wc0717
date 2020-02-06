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
@extends('wc-manage.components.contain-action-8')
@section('wc_m_content_action')
    <div class="col-md-12 text-center">
        <h3 class="tf-margin-30">Edit district</h3>
    </div>
    <div class="col-md-12">
        @if(count($dataDistrict) > 0)
            <form id="frmSystemDistrictEdit" name="frmSystemDistrictEdit" class="col-md-8 col-md-offset-2"
                  enctype="multipart/form-data" method="post" role="form"
                  action="{!! route('wc.m.system.district.edit.post', $dataDistrict->district_id) !!}">
                <div id="wc_m_system_district_edit_notify"
                     class="form-group text-center wc-font-bold  wc-color-red"></div>
                <div class="form-group">
                    <label class="control-label">Province <span class="wc-color-red">*</span>:</label>
                    <select class="form-control" name="cbProvince">
                        <option value="">Select</option>
                        {!! $modelProvince->getOption($dataDistrict->province_id) !!}
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtName" placeholder="Enter name" value="{!! $dataDistrict->name !!}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" class="wc_m_system_district_edit_post btn btn-default">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="button" class="wc_m_contain_action_close btn btn-default">Close</button>
                </div>
            </form>
        @endif
    </div>
@endsection