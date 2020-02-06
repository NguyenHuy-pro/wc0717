<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 9:27 PM
 */
?>
@extends('wc-manage.master')
@section('wc_manage_page_title')
    System
@endsection
@section('wc_manage_content')
    {{--menu sytem--}}
    @include('wc-manage.system.menu')

    {{--content--}}
    <div class="row">
        @yield('wc_manage_system_content')
    </div>
@endsection
