<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:42 PM
 */
$hFunction = new Hfunction();
$modelCountry = new \App\Models\WcManage\System\Country\WcCountry();
$modelProvinceType = new \App\Models\WcManage\System\ProvinceType\WcProvinceType();
?>
@extends('wc-manage.components.contain-action-8')
@section('wc_m_content_action')
    <div class="col-md-12 text-center">
        <h3 class="tf-margin-30">Edit province</h3>
    </div>
    <div class="col-md-12">
        @if(count($dataProvince) > 0)
            <form id="frmSystemProvinceEdit" name="frmSystemProvinceEdit" class="col-md-8 col-md-offset-2"
                  enctype="multipart/form-data" method="post" role="form"
                  action="{!! route('wc.m.system.province.edit.post', $dataProvince->province_id) !!}">
                <div id="wc_m_system_province_edit_notify"
                     class="form-group text-center wc-font-bold  wc-color-red"></div>
                <div class="form-group">
                    <label class="control-label">Country <span class="wc-color-red">*</span>:</label>
                    <select class="form-control" name="cbCountry">
                        <option value="">Select country</option>
                        {!! $modelCountry->getOption($dataProvince->country_id) !!}
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Province type <span class="wc-color-red">*</span>:</label>
                    <select class="form-control" name="cbProvinceType">
                        <option value="">Select type</option>
                        {!! $modelProvinceType->getOption($dataProvince->type_id) !!}
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtName" placeholder="Enter name" value="{!! $dataProvince->name !!}">
                </div>
                <div class="form-group">
                    <label class="control-label">New avatar :</label>
                    <?php
                    $hFunction->selectOneImage('fileAvatar', 'fileAvatar');
                    ?>
                </div>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <input type="hidden" name="oldAvatar" value="{!! $dataProvince->avatar !!}" >
                    <button type="button" class="wc_m_system_province_edit_post btn btn-default">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="button" class="wc_m_contain_action_close btn btn-default">Close</button>
                </div>
            </form>
        @endif
    </div>
@endsection