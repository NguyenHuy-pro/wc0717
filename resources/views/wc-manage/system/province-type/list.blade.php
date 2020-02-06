<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:41 PM
 */
$hFunction = new Hfunction();
$modelProvinceType = new \App\Models\WcManage\System\ProvinceType\WcProvinceType();
?>
@extends('wc-manage.system.index')
@section('wc_manage_system_content')
    <div class="col-md-12 text-center">
        <h3>Province type</h3>
    </div>
    <div class="col-md-12 wc-bg-2 " >
        <div class="col-md-6 wc-line-height-40">
            Total : {!! $modelProvinceType->totalRecords() !!}
        </div>
        <div class="col-md-6 wc-line-height-40 text-right">
            <a class="wc-link-bold" href="{!! route('wc.m.system.provinceType.add.get') !!}">
                Add new
            </a>
        </div>
    </div>
    <div class="wc_m_system_contain_province_type col-md-12"
         data-href-edit="{!! route('wc.m.system.provinceType.edit.get') !!}"
         data-href-delete="{!! route('wc.m.system.provinceType.delete') !!}">
        <table class="table table-hover">
            <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
            @if(count($dataProvinceType) > 0)
                <?php
                $perPage = $dataProvinceType->perPage();
                $currentPage = $dataProvinceType->currentPage();
                $N_o = ($currentPage == 1) ? 0 : ($currentPage - 1) * $perPage; // set row number
                ?>
                @foreach($dataProvinceType as $itemProvinceType)
                    <?php
                    $N_o = $N_o + 1;
                    $typeId = $itemProvinceType->type_id;
                    ?>
                    <tr class="wc_m_system_province_type_object" data-type="{!! $typeId !!}">
                        <td class="text-center">
                            {!! $N_o !!}.
                        </td>
                        <td>
                            {!! $itemProvinceType->name !!}
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_province_type_edit glyphicon glyphicon-pencil wc-link"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_province_type_delete glyphicon glyphicon-trash wc-link"></a>
                        </td>
                    </tr>
                @endforeach
                <tr class="odd gradeX" align="center">
                    <td colspan="4">
                        <?php
                        $hFunction->page($dataProvinceType);
                        ?>
                    </td>
                </tr>
            @else
                <tr class="odd gradeX">
                    <td class="text-center wc-color-red" colspan="8">
                        Not found
                    </td>
                </tr>
            @endif
        </table>
    </div>
@endsection
@section('wc_manage_js_page_footer')
    <script type="text/javascript" src="{{ url('public/wcManage/system/province-type/js/province-type.js')}}"></script>
@endsection
