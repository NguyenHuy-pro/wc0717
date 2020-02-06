<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:41 PM
 */
$hFunction = new Hfunction();
$modelProvinceType = new \App\Models\WcManage\System\ProvinceType\WcProvinceType();
$modelProvince = new \App\Models\WcManage\System\Province\WcProvince();
?>
@extends('wc-manage.system.index')
@section('wc_manage_system_content')
    <div class="col-md-12 text-center">
        <h3>Province</h3>
    </div>
    <div class="col-md-12 wc-bg-2 ">
        <div class="col-md-6 wc-line-height-40">
            Total : {!! $modelProvince->totalRecords() !!}
        </div>
        <div class="col-md-6 wc-line-height-40 text-right">
            <a class="wc-link-bold" href="{!! route('wc.m.system.province.add.get') !!}">
                Add new
            </a>
        </div>
    </div>
    <div class="wc_m_system_contain_province col-md-12"
         data-href-status="{!! route('wc.m.system.province.status.update') !!}"
         data-href-edit="{!! route('wc.m.system.province.edit.get') !!}"
         data-href-delete="{!! route('wc.m.system.province.delete') !!}">
        <table class="table table-hover">
            <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Type</th>
                <th class="text-center" >Status</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
            @if(count($dataProvince) > 0)
                <?php
                $perPage = $dataProvince->perPage();
                $currentPage = $dataProvince->currentPage();
                $N_o = ($currentPage == 1) ? 0 : ($currentPage - 1) * $perPage; // set row number
                ?>
                @foreach($dataProvince as $itemProvince)
                    <?php
                    $N_o = $N_o + 1;
                    $provinceId = $itemProvince->province_id;
                    $avatar = $itemProvince->avatar;
                    $status = $itemProvince->status;
                    ?>
                    <tr class="wc_m_system_province_object" data-province="{!! $provinceId !!}">
                        <td class="text-center">
                            {!! $N_o !!}.
                        </td>
                        <td>
                            {!! $itemProvince->name !!}
                        </td>
                        <td>
                            @if(!empty($avatar))
                                <img style="width: 100px;height: 70px;"
                                     src="{!! asset('public/images/system/province/avatar/'.$itemProvince->avatar) !!}">
                            @endif
                        </td>
                        <td>
                            {!! $modelProvinceType->name($itemProvince->type_id) !!}
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_province_status glyphicon glyphicon-ok @if($status == 0) wc-link-red @else wc-link @endif"
                               data-status="{!! $status !!}"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_province_edit glyphicon glyphicon-pencil wc-link"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_province_delete glyphicon glyphicon-trash wc-link"></a>
                        </td>
                    </tr>
                @endforeach
                <tr class="odd gradeX" align="center">
                    <td colspan="7">
                        <?php
                        $hFunction->page($dataProvince);
                        ?>
                    </td>
                </tr>
            @else
                <tr class="odd gradeX">
                    <td class="text-center wc-color-red" colspan="7">
                        Not found
                    </td>
                </tr>
            @endif
        </table>
    </div>
@endsection
@section('wc_manage_js_page_footer')
    <script type="text/javascript" src="{{ url('public/wcManage/system/province/js/province.js')}}"></script>
@endsection
