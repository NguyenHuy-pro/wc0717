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
        <h3 class="tf-margin-30">Edit Department</h3>
    </div>
    <div class="col-md-12">
        @if(count($dataDepartment) > 0)
            <form id="frmSysDepartmentEdit" class="col-md-8 col-md-offset-2" name="frmSysDepartmentEdit"
                  enctype="multipart/form-data" method="post" role="form"
                  action="{!! route('wc.m.staff.department.edit.post',$dataDepartment->department_id) !!}">
                <div id="wc_m_staff_department_edit_notify" class="form-group text-center wc-font-bold  wc-color-red"></div>
                <div class="form-group">
                    <label class="control-label">Name <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtName"
                           value="{!! old('txtName',$dataDepartment->name) !!}" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label class="control-label">Department Code <span class="wc-color-red">*</span>:</label>
                    <input type="text" class="form-control" name="txtCode"
                           value="{!! old('txtCode',$dataDepartment->nameCode) !!}" placeholder="Enter code">
                </div>
                <div class="form-group text-center">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" class="wc_m_staff_department_edit_post btn btn-default">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="button" class="wc_m_contain_action_close btn btn-default">Close</button>
                </div>
            </form>
            @endif
    </div>
@endsection