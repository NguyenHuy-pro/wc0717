<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/14/2016
 * Time: 9:48 PM
 */
?>
<div class="wcMasterMenu wc-master-menu wc-bg-8 text-center" >
    <div class="wc-master-menu-content ">
        <ul class="list-group">
            <li class="list-group-item text-center wc-padding-none wc-bg-8 ">
                <img class="wc-img-50 wc-border-radius-8" src="{!! asset('public\imgtest\d2.jpg') !!}" />
            </li>
            <li class="list-group-item text-center wc-bg-8 wc-color-white">
                <span class="glyphicon glyphicon-globe wcNews wc-font-size-24" ></span>
            </li>
            <li class="wc-position-rel list-group-item wc-bg-8 wc-color-white">
                <span class="glyphicon glyphicon-th wcControl  wc-font-size-24"></span>
                @include('components.control.wc-control')
            </li>
            <li class="list-group-item wc-bg-8 wc-color-white">
                <span class="glyphicon glyphicon-envelope wc-font-size-24" ></span>
            </li>
            <li class="list-group-item wc-bg-8 wc-color-white">
                <span class="glyphicon glyphicon-volume-up wc-font-size-24" ></span>
            </li>
            <li class="list-group-item wc-bg-8 wc-color-white">
                <span class="glyphicon glyphicon-cog wc-font-size-24" ></span>
            </li>
        </ul>
    </div>
</div>
