<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="3dtfcom">
    <meta name="author" content="3dtfcom">
    <title>WC0717</title>
    <link rel="shortcut icon" href="{!! asset('public/imgtest/e1.jpg') !!}">

    {{--Bootstrap Core CSS --}}
    <link href="{{ url('public/includes/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/includes/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/includes/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{ url('public/includes/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{ url('public/includes/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}"
          rel="stylesheet">
    <link href="{{ url('public/includes/bower_components/datatables-responsive/css/dataTables.responsive.css')}}"
          rel="stylesheet">

    {{--wc css--}}
    <link href="{{ url('public/includes/css/main.css')}}" rel="stylesheet">
    <link href="{{ url('public/wcManage/css/wc-manage.css')}}" rel="stylesheet">

    {{--offline--}}
    <script type="text/javascript" src="{{ url('public/includes/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('public/includes/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('public/includes/js/form/jquery.form.js')}}"></script>

    {{--wc js--}}
    <script src="{{ url('public/includes/js/main.js')}}"></script>
    <script src="{{ url('public/wcManage/js/wc-manage.js')}}"></script>

    <script type="text/javascript">
        var baseURL = "{!! url('/') !!}";
    </script>
</head>
<body class="wc-margin-padding-none">
<table id="wc_m_panel" class="table table-bordered wc-bg-8 wc_m_panel wc-margin-none">
    <tr>
        <td class="col-sm-3 col-md-3 wc-color-white">
            <p>
                <em>Welcome:</em> staff name
            </p>
            <a class="wc-link-red-bold" href="#">
                Logout
            </a>
        </td>
        <td class="col-sm-3 col-md-3">
            <a class="wc-link-white-bold" href="{!! route('wc.manage.system') !!}">System</a>
        </td>
        <td class="col-sm-3 col-md-3">
            <a class="wc-link-white-bold" href="#">Wall</a>
        </td>
        <td class="col-sm-3 col-md-3">
            <a class="wc-link-white-bold" href="#">Fruit</a>
        </td>
    </tr>
    <tr>
        <td class="col-sm-3 col-md-3">
            <a class="wc-link-white-bold" href="#">Travel</a>
        </td>
        <td>
            <a class="wc-link-white-bold" href="#">Food</a>
        </td>
        <td>
            <a class="wc-link-white-bold" href="#">Help</a>
        </td>
        <td>
            <a class="wc-link-white-bold" href="{!! route('wc.manage.staff') !!}">Staff</a>
        </td>
    </tr>
    <tr>
        <td>
            <a class="wc-link-white-bold" href="#">Resident</a>
        </td>
        <td>
            <a class="wc-link-white-bold" href="#">...</a>
        </td>
        <td>
            <a class="wc-link-white-bold glyphicon glyphicon-plus" href="#"></a>
        </td>
        <td>
            <a class="wc-link-white-bold glyphicon glyphicon-plus" href="#"></a>
        </td>
    </tr>
</table>

{{--bootstrap js--}}
<script src="{{ url('public/includes/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ url('public/includes/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ url('public/includes/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
<script src="{{ url('public/includes/dist/js/sb-admin-2.js')}}"></script>
<script src="{{ url('public/includes/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/includes/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

</body>
</html>
