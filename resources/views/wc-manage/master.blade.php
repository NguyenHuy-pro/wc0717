<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 9:08 PM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="3dtfcom">
    <meta name="author" content="3dtfcom">
    <title>
        @yield('wc_manage_page_title')
    </title>
    <link rel="shortcut icon" href="{!! asset('public/icons/d1.jpg') !!}">

    {{--Bootstrap Core CSS--}}
    <link href="{{ url('public/includes/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    {{--MetisMenu CSS--}}
    <link href="{{ url('public/includes/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    {{--Custom CSS--}}
    <link href="{{ url('public/includes/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    {{--Custom Fonts--}}
    <link href="{{ url('public/includes/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    {{--DataTables CSS--}}
    <link href="{{ url('public/includes/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}"
          rel="stylesheet">

    {{--DataTables Responsive CSS--}}
    <link href="{{ url('public/includes/bower_components/datatables-responsive/css/dataTables.responsive.css')}}"
          rel="stylesheet">

    {{--WC css--}}
    <link href="{{ url('public/includes/css/main.css')}}" rel="stylesheet">
    <link href="{{ url('public/wcManage/css/wc-manage.css')}}" rel="stylesheet">

    {{--include css per page--}}
    @yield('wc_manage_page_css')

    <script type="text/javascript" src="{{ url('public/includes/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('public/includes/js/jquery-ui/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{ url('public/includes/js/jquery-form/jquery.form.js')}}"></script>

    {{--wc js--}}
    <script src="{{ url('public/includes/js/main.js')}}"></script>
    <script src="{{ url('public/wcManage/js/wc-manage.js')}}"></script>

    {{--include js per page on header--}}
    @yield('wc_manage_page_js_header')

    {{--ckeditor/ckfinder--}}
    <script src="{{ url('public/includes/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ url('public/includes/js/ckfinder/ckfinder.js')}}"></script>

    <script type="text/javascript">
        var baseURL = "{!! url('/') !!}";
    </script>
    <script src="{{ url('public/includes/js/func_ckfinder.js')}}"></script>
</head>
<body>
<div id="wc_manage_wrap" class="container-fluid wc-position-rel ">
    {{--loading status--}}
    <img class="wc_m_load_status wc-m-load-status" src="{!! asset('public/icons/loading.gif') !!}">

    {{--Page Content--}}
    <div class="row">
        <div class="col-md-12 col-lg-12">
            @yield('wc_manage_content')
        </div>
    </div>
</div>

{{--jQuery--}}
{{--<script src="{{ url('public/includes/bower_components/jquery/dist/jquery.min.js')}}"></script>--}}

{{--Bootstrap Core JavaScript--}}
<script src="{{ url('public/includes/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

{{--Metis Menu Plugin JavaScript--}}
<script src="{{ url('public/includes/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

{{--Custom Theme JavaScript--}}
<script src="{{ url('public/includes/dist/js/sb-admin-2.js')}}"></script>

{{--DataTables JavaScript--}}
<script src="{{ url('public/includes/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/includes/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

{{--include js per page on footer--}}
@yield('wc_manage_js_page_footer')

</body>

</html>

