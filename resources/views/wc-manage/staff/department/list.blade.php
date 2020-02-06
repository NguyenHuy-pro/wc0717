<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:41 PM
 */
$hFunction = new Hfunction();
$modelDepartment = new \App\Models\WcManage\Staff\Department\WcDepartment();
?>
@extends('wc-manage.staff.index')
@section('wc_manage_staff_content')
    <div class="col-md-12 text-center">
        <h3>Department</h3>
    </div>
    <div class="col-md-12 wc-bg-2 ">
        <div class="col-md-6 wc-line-height-40">
            Total : {!! $modelDepartment->totalRecords() !!}
        </div>
        <div class="col-md-6 wc-line-height-40 text-right">
            <a class="wc-link-bold" href="{!! route('wc.m.staff.department.add.get') !!}">
                New add
            </a>
        </div>
    </div>
    <div class="wc_m_staff_department_contain col-md-12"
         data-href-status="{!! route('wc.m.staff.department.status.update') !!}"
         data-href-edit="{!! route('wc.m.staff.department.edit.get') !!}"
         data-href-delete="{!! route('wc.m.staff.department.delete') !!}">
        <table class="table table-hover">
            <tr>
                <th class="text-center">N_o</th>
                <th>Code</th>
                <th>Name</th>
                <th class="text-center">Status</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
            @if(count($dataDepartment) > 0)
                <?php
                $perPage = $dataDepartment->perPage();
                $currentPage = $dataDepartment->currentPage();
                $N_o = ($currentPage == 1) ? 0 : ($currentPage - 1) * $perPage; // set row number
                ?>
                @foreach($dataDepartment as $itemDepartment)
                    <?php
                    $N_o = $N_o + 1;
                    $departmentId = $itemDepartment->department_id;
                    $status = $itemDepartment->status;
                    ?>
                    <tr class="wc_m_staff_department_object" data-department="{!! $departmentId !!}">
                        <td class="text-center">
                            {!! $N_o !!}.
                        </td>
                        <td>
                            {!! $itemDepartment->nameCode !!}
                        </td>
                        <td>
                            {!! $itemDepartment->name !!}
                        </td>
                        <td class="text-center">
                            <a class="wc_m_staff_department_status glyphicon glyphicon-ok @if($status == 0) wc-link-red @else wc-link @endif"
                               data-status="{!! $status !!}" ></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_staff_department_edit glyphicon glyphicon-pencil wc-link"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_staff_department_delete glyphicon glyphicon-trash wc-link"></a>
                        </td>
                    </tr>
                @endforeach
                <tr class="odd gradeX" align="center">
                    <td colspan="6">
                        <?php
                        $hFunction->page($dataDepartment);
                        ?>
                    </td>
                </tr>
            @else
                <tr class="odd gradeX">
                    <td class="text-center wc-color-red" colspan="6">
                        Not found
                    </td>
                </tr>
            @endif
        </table>
    </div>
@endsection
@section('wc_manage_js_page_footer')
    <script type="text/javascript" src="{{ url('public/wcManage/staff/department/js/department.js')}}"></script>
@endsection
