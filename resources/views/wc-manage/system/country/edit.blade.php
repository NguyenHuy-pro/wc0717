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
        @if(count($dataCountry) > 0)
            <form id="frmSysCountryEdit" class="col-md-8 col-md-offset-2" name="frmSysCountryEdit"
                  enctype="multipart/form-data" method="post" role="form"
                  action="{!! route('wc.m.system.country.edit.post',$dataCountry->country_id) !!}">
                <div id="wc_m_sys_country_edit_notify" class="form-group text-center wc-font-bold  wc-color-red"></div>
                <div class="form-group">
                    <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtName"
                           value="{!! old('txtName',$dataCountry->name) !!}" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label class="control-label">Code of country <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtCode"
                           value="{!! old('txtCode',$dataCountry->nameCode) !!}" placeholder="Enter code">
                </div>
                <div class="form-group">
                    <label class="control-label">Money unit <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" id="txtMoney" name="txtMoney"
                           value="{!!$dataCountry->moneyUnit !!}" placeholder="Enter money unit">
                </div>
                <div>
                    <label class="control-label">Flag :</label>
                    <img class="form-control wc-border-none" style="width: 100px;height: 70px;"
                         src="{!! asset('public/images/system/country/flag/'.$dataCountry->flagImage) !!}">
                </div>
                <div class="form-group">
                    <label class="control-label">New flag:</label>
                    <?php
                    $hFunction->selectOneImage('txtFlag', 'txtFlag');
                    ?>
                </div>
                <div class="form-group text-center">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" class="wc_m_system_country_edit_post btn btn-default">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="button" class="wc_m_contain_action_close btn btn-default">Close</button>
                </div>
            </form>
            @endif
    </div>
@endsection