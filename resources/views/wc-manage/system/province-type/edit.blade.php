<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:42 PM
 */
$hFunction = new Hfunction();
?>
@extends('wc-manage.components.contain-action-8')
@section('wc_m_content_action')
    <div class="col-md-12 text-center">
        <h3 class="tf-margin-30">Edit Country</h3>
    </div>
    <div class="col-md-12">
        @if(count($dataProvinceType) > 0)
            <form id="frmSysProvinceTypeEdit" class="col-md-8 col-md-offset-2" name="frmSysProvinceTypeEdit"
                  enctype="multipart/form-data" method="post" role="form"
                  action="{!! route('wc.m.system.provinceType.edit.post',$dataProvinceType->type_id) !!}">
                <div id="wc_m_system_province_type_edit_notify"
                     class="form-group text-center wc-font-bold  wc-color-red"></div>
                <div class="form-group">
                    <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtName"
                           value="{!! old('txtName',$dataProvinceType->name) !!}" placeholder="Enter name">
                </div>
                <div class="form-group text-center">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" class="wc_m_system_province_type_edit_post btn btn-default">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="button" class="wc_m_contain_action_close btn btn-default">Close</button>
                </div>
            </form>
        @endif
    </div>
@endsection