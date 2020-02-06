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
    Staff
@endsection
@section('wc_manage_content')
    {{--menu sytem--}}
    @include('wc-manage.staff.menu')

    {{--content--}}
    <div class="row">
        @yield('wc_manage_staff_content')
    </div>
@endsection
