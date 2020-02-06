@extends('master')
@section('titlePage')
    Travel
@endsection()

@section('shortcutPage')
    <link rel="shortcut icon" href="{!! asset('public/imgtest/travel_1.jpg') !!}"/>
@endsection

{{--css--}}
@section('wcMasterCss')
    <link href="{{ url('public/travel/css/index.css')}}" rel="stylesheet">
@endsection

{{--js--}}
@section('wcMasterJsHeader')
    <script src="{{ url('public/travel/js/index.js')}}"></script>
@endsection

@section('wcMasterContent')
    <div class="wc-travel-index container-fluid">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <div class="row wc-display-nones">
                <div class="col-md-12 text-right" style="padding: 20px 0;">
                    <a href="#">Đăng ký</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                    <a href="#">Đăng nhập</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding: 20px 0;">
                    <a class="wc-link-red">Đi đâu ?</a> &nbsp;&nbsp;
                    |&nbsp;&nbsp; <a>Đã đánh dấu</a>
                    |&nbsp;&nbsp; <a>Thêm địa điểm</a>
                </div>
            </div>
            <div class="row">

                {{--biểu tượng hệ thống--}}
                <div class="col-md-12 text-left">
                    <i class="fa fa-bicycle" style="color: red; font-size: 20px;"></i>
                    <i style="color: green; font-size: 100px;">?</i>
                </div>

                {{--chọn địa điểm--}}
                <div class="col-md-12 text-left" style="padding-bottom:30px;">
                    <div class="btn-group" style="margin-right: 20px;">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" title="Phải chọn tỉnh/thành">
                            Tỉnh/Thành nào? <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">TP HCM</a></li>
                            <li><a href="#">TP Đà Nẵng</a></li>
                            <li><a href="#">TP Cần Thơ</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" style="margin-right: 20px;">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" title="Hiện theo tỉnh/thành">
                            Tất cả Quận/Huyện? <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Tên Quận</a></li>
                            <li><a href="#">Tên Huyện</a></li>
                        </ul>
                    </div>
                    <a href="#" style="font-size: 16px; text-decoration: underline;">Go</a>
                </div>

                {{--chọn tính năng--}}
                <div class="col-sm-12 col-md-12">
                    <div class="col-md-4">
                        <div class="panel panel-default" style="border: none;">
                            <div class="panel-heading" style="background:none;border: none; padding: 0;margin: 0;">
                                <label>Mô hình</label>
                            </div>
                            <div class="panel-body" style="padding: 0;margin: 0;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Tham quan
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Phượt
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Nghĩ dưỡng
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Khám phá - Sinh thái
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default" style="border: none;">
                            <div class="panel-heading" style="background:none;border: none;padding: 0;margin: 0;">
                                <label>Thành phần</label>
                            </div>
                            <div class="panel-body" style="padding: 0;margin: 0;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Gia đình
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Một người
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Hai người
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Nhiều hơn hơn
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default" style="border: none;">
                            <div class="panel-heading" style="background:none;border: none;padding: 0;margin: 0;">
                                <label>Tính năng</label>
                            </div>
                            <div class="panel-body" style="padding: 0;margin: 0;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Ẩm thực
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Trải ngiệm
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Văn nghệ
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Trò chơi dân gian
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
