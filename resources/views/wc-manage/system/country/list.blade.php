<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 11:41 PM
 */
$hFunction = new Hfunction();
$modelCountry = new \App\Models\WcManage\System\Country\WcCountry();
?>
@extends('wc-manage.system.index')
@section('wc_manage_system_content')
    <div class="col-md-12 text-center">
        <h3>Country</h3>
    </div>
    <div class="col-md-12 " style="background-color: #BFCAE6;">
        <div class="col-md-6 wc-line-height-40">
            Total : {!! $modelCountry->totalRecords() !!}
        </div>
        <div class="col-md-6 wc-line-height-40 text-right">
            <a class="wc-link-bold" href="{!! route('wc.m.system.country.add.get') !!}">
                Add new
            </a>
        </div>
    </div>
    <div class="wc_m_system_contain_country col-md-12"
         data-href-status="{!! route('wc.m.system.country.status.update') !!}"
         data-href-edit="{!! route('wc.m.system.country.edit.get') !!}"
         data-href-delete="{!! route('wc.m.system.country.delete') !!}">
        <table class="table table-hover">
            <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th class="text-center">International code</th>
                <th>Flag</th>
                <th>Date</th>
                <th class="text-center">Status</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
            @if(count($dataCountry) > 0)
                <?php
                $perPage = $dataCountry->perPage();
                $currentPage = $dataCountry->currentPage();
                $N_o = ($currentPage == 1) ? 0 : ($currentPage - 1) * $perPage; // set row number
                ?>
                @foreach($dataCountry as $itemCountry)
                    <?php
                    $N_o = $N_o + 1;
                    $countryID = $itemCountry->country_id;
                    $status = $itemCountry->status;
                    ?>
                    <tr class="wc_m_system_country_object" data-country="{!! $countryID !!}">
                        <td class="text-center">
                            {!! $N_o !!}.
                        </td>
                        <td>
                            {!! $itemCountry->name !!}
                        </td>
                        <td class="text-center">
                            {!! $itemCountry->nameCode !!}
                        </td>
                        <td>
                            <img style="width: 100px;height: 70px;"
                                 src="{!! asset('public/images/system/country/flag/'.$itemCountry->flagImage) !!}">
                        </td>
                        <td>
                            {!! $itemCountry->dateAdded !!}
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_country_status glyphicon glyphicon-ok @if($status == 0) wc-link-red @else wc-link @endif"
                               data-status="{!! $status !!}" data-href="#"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_country_edit glyphicon glyphicon-pencil wc-link"></a>
                        </td>
                        <td class="text-center">
                            <a class="wc_m_system_country_delete glyphicon glyphicon-trash wc-link"></a>
                        </td>
                    </tr>
                @endforeach
                <tr class="odd gradeX" align="center">
                    <td colspan="8">
                        <?php
                        $hFunction->page($dataCountry);
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
    <script type="text/javascript" src="{{ url('public/wcManage/system/country/js/country.js')}}"></script>
@endsection
