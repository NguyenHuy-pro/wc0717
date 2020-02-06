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
        <h3 class="wc-margin-30">Add Country</h3>
    </div>
    <div class="col-md-12">
        <form id="frmSysCountryAdd" name="frmSysCountryAdd" class="col-md-8 col-md-offset-2"
              enctype="multipart/form-data" method="post" role="form"
              action="{!! route('wc.m.system.country.add.post') !!}">
            <div id="wc_m_system_country_add_notify" class=" form-group text-center wc-font-bold  wc-color-red"></div>
            <div class="form-group">
                <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                <input type="text" class="form-control" name="txtName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label class="control-label">Code of country <span class="wc-color-red">*</span>:</label>
                <input type="text" class="form-control" name="txtCode" placeholder="Enter code">
            </div>
            <div class="form-group">
                <label class="control-label">Money unit <span class="wc-color-red">*</span>:</label>
                <input type="text" class="form-control" name="txtMoney" placeholder="Enter money unit">
            </div>
            <div class="form-group">
                <label class="control-label">Flag <span class="wc-color-red">*</span>:</label>
                <?php
                $hFunction->selectOneImage('txtFlag', 'txtFlag');
                ?>
            </div>
            <div class="form-group">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button type="button" class="wc_m_system_country_add_post btn btn-default">Save</button>
                <button type="reset" class="btn btn-default">Reset</button>
                <a href="{!! route('wc.m.system.country.list.get') !!}">
                    <button type="button" class="btn btn-default">Close</button>
                </a>
            </div>
        </form>
    </div>
@endsection
@section('wc_manage_js_page_footer')
    <script src="{{ url('public/wcManage/system/country/js/country.js')}}"></script>
@endsection
