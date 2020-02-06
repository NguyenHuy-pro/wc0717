<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:41 PM
 */
$hFunction = new Hfunction();
$modelProvince = new \App\Models\WcManage\System\Province\WcProvince();
$modelDistrict = new \App\Models\WcManage\System\District\WcDistrict();
?>
@extends('wc-manage.system.index')
@section('wc_manage_system_content')
    <div class="col-md-12 text-center">
        <h3>District</h3>
    </div>
    <div class="col-md-12 wc-bg-2 ">
        <div class="col-md-6 wc-line-height-40">
            Total : {!! $modelDistrict->totalRecords() !!}
        </div>
        <div class="col-md-6 wc-line-height-40 text-right">
            <a class="wc-link-bold" href="{!! route('wc.m.system.district.add.get') !!}">
                Add
            </a>
        </div>
    </div>
    <div class="wc_m_system_contain_district col-md-12"
         data-href-status="{!! route('wc.m.system.district.status.update') !!}"
         data-href-edit="{!! route('wc.m.system.district.edit.get') !!}"
         data-href-delete="{!! route('wc.m.system.district.delete') !!}">
        <table class="table table-hover">
            <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th>Province</th>
                <th class="text-center">Status</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
            @if(count($dataDistrict) > 0)
                <?php
                $perPage = $dataDistrict->perPage();
                $currentPage = $dataDistrict->currentPage();
                $N_o = ($currentPage == 1) ? 0 : ($currentPage - 1) * $perPage; // set row number
                ?>
                @foreach($dataDistrict as $itemDistrict)
                    <?php
                    $N_o = $N_o + 1;
                    $districtId = $itemDistrict->district_id;
                    $provinceId = $itemDistrict->province_id;
                    $status = $itemDistrict->status;
                    ?>
                    <tr class="wc_m_system_district_object" data-district="{!! $districtId !!}">
                        <td class="text-center">
                            {!! $N_o !!}.
                        </td>
                        <td>
                            {!! $itemDistrict->name !!}
                        </td>
                        <td>
                            {!! $modelProvince->name($provinceId) !!}
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_district_status glyphicon glyphicon-ok @if($status == 0) wc-link-red @else wc-link @endif"
                               data-status="{!! $status !!}"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_district_edit glyphicon glyphicon-pencil wc-link"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_district_delete glyphicon glyphicon-trash wc-link"></a>
                        </td>
                    </tr>
                @endforeach
                <tr class="odd gradeX" align="center">
                    <td colspan="6">
                        <?php
                        $hFunction->page($dataDistrict);
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
    <script type="text/javascript" src="{{ url('public/wcManage/system/district/js/district.js')}}"></script>
@endsection
