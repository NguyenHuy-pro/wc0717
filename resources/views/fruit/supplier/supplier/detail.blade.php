@extends('fruit.index')

@section('titlePage')
    Store
@endsection
{{--login info--}}
@section('wcFruitUser')
    @include('fruit.components.user')
@endsection

{{--search    --}}
@section('wcFruitSearch')
    @include('fruit.components.search')
@endsection

{{--menu--}}
@section('wcFruitMenu')
    @include('fruit.components.menu')
@endsection

@section('wcFruitMainContent')
    <div class="wc-margin-padding-none wc-bg-4">
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-body">
                <ul class="pager wc-margin-padding-none">
                    <li class="previous">
                        <a class="" href="{!! URL::route('wc.fruit.supplier.get') !!}">&larr; Trở lại</a>
                    </li>
                </ul>
            </div>
            <div class="panel-body text-center">
                <h3>Tên cửa hàng</h3>
                <img class="media-object wc-img-200 wc-border-radius-4 wc-margin-16"
                     src="{!! asset('public/imgtest/fruit/c_h_1.jpg') !!}"/>
                <p><em>Địa chỉ</em> : dia chi cua cua hang - dia chi cua cua hang</p>
                <p><em>Điện thoại </em> : dia chi cua cua hang - dia chi cua cua hang</p>
                <p><em>Email </em> : diachiemai@gmail.com</p>
                <p><em>Website</em> : <a href="#">dia chi cua cua hang - dia chi cua cua hang</a></p>
            </div>
            <div class="panel-body">
                <p>Giới thiệu</p>
                mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua
                mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua
                mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua
                mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua
                mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua hang--mo ta ve cua
            </div>
            <div class="panel-body">
                <p>Ảnh của hàng</p>
                <img class="wc-img-150 wc-border-1 wc-margin-8 wc-float-lef"
                     src="{!! asset('public/imgtest/fruit/fruit_1.jpg') !!}" alt="...">
                <img class="wc-img-150 wc-border-1 wc-margin-8 wc-float-lef"
                     src="{!! asset('public/imgtest/fruit/fruit_2.jpg') !!}" alt="...">
                <img class="wc-img-150 wc-border-1 wc-margin-8 wc-float-lef"
                     src="{!! asset('public/imgtest/fruit/mv_1.jpg') !!}" alt="...">
                <img class="wc-img-150 wc-border-1 wc-margin-8 wc-float-lef"
                     src="{!! asset('public/imgtest/fruit/c_h_10.jpg') !!}" alt="...">
            </div>
        </div>
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-body text-right ">
                <textarea class="form-control " placeholder="nhap binh luan...." rows="3"></textarea>
                <button type="button" class="btn btn-primary btn-sm ">Gửi</button>
            </div>
            <div class="panel-body ">
                <div class="row wc-margin-bot-16">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                        Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh
                        Noi dung binh luan Noi dung binh luan Noi dung binh luan
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                        <img class="wc-img-40" src="{!! asset('public/imgtest/d1.jpg') !!}" alt="...">
                        <a>Tên người dùng</a> 12-12-2016
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                        <a>Thích</a> 1000 &nbsp; | &nbsp; <a>Báo cáo</a> &nbsp;&nbsp;
                    </div>
                </div>
                <div class="row wc-margin-bot-16">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                        Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh
                        Noi dung binh luan Noi dung binh luan Noi dung binh luan
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                        <img class="wc-img-40" src="{!! asset('public/imgtest/a.jpg') !!}" alt="...">
                        <a>username username</a> 12-12-2016
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                        <a>Like</a> 1000 &nbsp; | &nbsp; <a>Bao cao</a> &nbsp;&nbsp;
                    </div>
                </div>
                <div class="row wc-margin-bot-16">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                        Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh luan Noi dung binh
                        Noi dung binh luan Noi dung binh luan Noi dung binh luan
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                        <img class="wc-img-40" src="{!! asset('public/imgtest/c.jpg') !!}" alt="...">
                        <a>username username</a> 12-12-2016
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                        <a>Like</a> 1000 &nbsp; | &nbsp; <a>Bao cao</a> &nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-heading wc-bg-4">
                Nha cung cap lien quan (cung loai T/C)
            </div>
            <div class="panel-body">
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-70 wc-border-radius-4"
                                     src="{!! asset('public/imgtest/fruit/c_h_8.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Ten cua hang trai cay
                                </a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<br/>
                                <em>d/c : dia chi cua hang dia chi cua hang dia chi cua hang / website</em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-70 wc-border-radius-4"
                                     src="{!! asset('public/imgtest/fruit/c_h_9.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Ten cua hang trai cay
                                </a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<br/>
                                <em>d/c : dia chi cua hang dia chi cua hang dia chi cua hang / website</em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <div class="media-body">
                                <a href="#">
                                    Ten cua hang trai cay
                                </a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<br/>
                                <em>d/c : dia chi cua hang dia chi cua hang dia chi cua hang / website</em>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-70 wc-border-radius-4"
                                     src="{!! asset('public/imgtest/fruit/c_h_10.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Ten cua hang trai cay
                                </a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<br/>
                                <em>d/c : dia chi cua hang dia chi cua hang dia chi cua hang / website</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
