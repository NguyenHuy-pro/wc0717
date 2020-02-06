@extends('fruit.index')

@section('titlePage')
    Fruit
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
                <h3>Tiêu đề của bài viết</h3>
                <p>
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bainoi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                </p>
                <p class="text-center">
                    <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                </p>
                <p>
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bainoi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                </p>
                <p>
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bainoi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi .
                </p>
            </div>

            <!-- detail post -->
            <div class="panel-body ">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left wc-margin-16">
                        <em>Nguồn :</em> www.asdsas.com/ssdsadas/dsadsdsdsd /dasdsdsdsdsdsdasdsdds-sdasd-sdas.html
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                        <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                        <em>Tác giả : </em><a>Tên người dùng</a>
                    </div>
                </div>
            </div>
            <!-- end detail -->

            <!-- comment -->
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
            <!-- end comment -->
        </div>
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-heading wc-bg-4">
                Hình ảnh liên quan
            </div>
            <div class="panel-body">
                <div class="wc-border-1 wc-margin-8 wc-float-left" style=" width: 150px;height: 100px">
                    <div style="width: 100%;height: 70px">
                        <img class="wc-width-height-full" src="{!! asset('public/imgtest/fruit/cam.jpg') !!}" alt="...">
                    </div>
                    <div class="wc-line-height-30 text-center">
                        Tên trái cây 1
                    </div>
                </div>
                <div class="wc-border-1 wc-margin-8 wc-float-left" style=" width: 150px;height: 100px">
                    <div style="width: 100%;height: 70px">
                        <img class="wc-width-height-full" src="{!! asset('public/imgtest/fruit/cam.png') !!}" alt="...">
                    </div>
                    <div class="wc-line-height-30 text-center">
                        Tên trái cây 2
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-heading wc-bg-4">
                Video liên quan
            </div>
            <div class="panel-body">
                <div class="wc-border-1 wc-margin-8 wc-float-left" style=" width: 200px;height: 150px">
                    <div style="width: 200px;height: 150px">
                        <img class="wc-width-height-full" src="{!! asset('public/imgtest/fruit/clip.jpg') !!}" alt="...">
                    </div>
                </div>
                <div class="wc-border-1 wc-margin-8 wc-float-left" style="width: 200px;height: 150px">
                    <div style="width: 200px;height: 150px">
                        <img class="wc-width-height-full" src="{!! asset('public/imgtest/fruit/clip_1.jpg') !!}" alt="...">
                    </div>
                </div>
                <div class="wc-border-1 wc-margin-8 wc-float-left" style="width: 200px;height: 150px">
                    <div style="width: 200px;height: 150px">
                        <img class="wc-width-height-full" src="{!! asset('public/imgtest/fruit/clip_2.jpg') !!}" alt="...">
                    </div>
                </div>
                <div class="wc-border-1 wc-margin-8 wc-float-left" style="width: 200px;height: 150px">
                    <div style="width: 200px;height: 150px">
                        <img class="wc-width-height-full" src="{!! asset('public/imgtest/fruit/clip_4.jpg') !!}" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-heading wc-bg-4">
                Trái cây cùng loại
            </div>
            <div class="panel-body">
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-150 wc-border-radius-4" src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">Tên bài viết về trái cây</a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<a href="">chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                                <em>Tác giả : </em><a>Tên người dùng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-150 wc-border-radius-4" src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">Ten cu bai viet Ten cu bai viet</a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<a href="">chi tiet</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                                <em>tac gia : </em><a>username username</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-150 wc-border-radius-4" src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">Ten cu bai viet Ten cu bai viet</a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<a href="">chi tiet</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                                <em>tac gia : </em><a>username username</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wc-border-none">
                    <div class="panel-body wc-margin-padding-none ">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-150 wc-border-radius-4"
                                     src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                            </a>
                            <div class="media-body">
                                <a href="#">Ten cu bai viet Ten cu bai viet</a><br/>
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet
                                ............<a href="">chi tiet</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                                <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-right">
                                <em>tac gia : </em><a>username username</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body wc-margin-padding-none">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right wc-padding-rig-16">
                            <ul class="pagination pagination-sm wc-margin-padding-none">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection()
