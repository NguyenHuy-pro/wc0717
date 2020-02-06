<div id="wcMasterNewsWrap" class="wc-master-news-wrap">
    <div id="wcMasterNews" class="wc-master-news ">

        {{--from status update--}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-pencil wc-bg wc-color-white"></span>
                Cập nhật trạng thái
            </div>
            <div class="panel-body">
                <textarea class="form-control wc-border-none" placeholder="Enter status..." rows="3"></textarea>
                <img src="{!! asset('public/imgtest/e.jpg') !!}" style="width: 50px; height: 50px;" />
            </div>
            <div class="panel-footer text-right">
                <span class="glyphicon glyphicon-camera wc-float-left wc-font-size-24 "></span>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Lĩnh vực<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a class="text-center" href="#">Tổng hợp</a></li>
                        <li><a class="text-center" href="#">Trái cây</a></li>
                        <li><a class="text-center" href="#">Ẩm thực</a></li>
                        <li><a class="text-center" href="#">Du lịch</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Người xem <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#">Mọi người</a></li>
                        <li><a href="#">Bạn bè</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary btn-sm ">Đăng</button>
            </div>
        </div>
        <!-- end from status update -->
        <!-- news content -->
        <div class="wc-news-post">
            <div class="panel panel-default wc-news-post-wrap " >
                <!-- resident info -->
                <div class="panel-heading">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/d1.jpg') !!}"
                                 style="width: 50px;height: 50px;" />
                        </a>
                        <div class="media-body">
                            <a href="#">Tên người dùng</a><br/>
                            <span>01-01-2017 lúc 1h</span>
                        </div>
                    </div>
                </div>
                <!-- end resident info -->
                <div class="panel-body">
                    content text content text content text content text content text content text content text
                    content text content text content text content text content text content text content text
                </div>
                <div class="panel-body">
                    <img src="{!! asset('public/imgtest/e.jpg') !!}" />
                </div>
                <div class="panel-body wc-padding-top-none wc-padding-bot-none">
                    <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                    Lĩnh vực : </span> Tên lĩnh vực
                </div>
                <div class="panel-body">
                    <div class="media wc-width-full">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/d2.jpg') !!}" style="width: 40px; height: 40px;" />
                        </a>
                        <div class="media-body wc-width-full">
                            <a href="#">Tên người dùng</a> nội dung bình luận
                            <div>
                                <a href="#">Thích</a> &nbsp;&nbsp;
                                <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span>12-12-2017 lúc 1h</span>
                            </div>
                        </div>
                    </div>
                    <div class="media wc-width-full">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/e.jpg') !!}" style="width: 40px; height: 40px;" />
                        </a>
                        <div class="media-body wc-width-full">
                            <a href="#">Tên người dùng</a> nội dung bình luận
                            <div>
                                <a href="#">Thích</a> &nbsp;&nbsp;
                                <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                                <span>12-12-2017 lúc 1h</span>
                            </div>
                        </div>
                    </div>
                    <div class="media wc-width-full">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/e.jpg') !!}"
                                 style="width: 40px; height: 40px;" />
                        </a>
                        <div class="media-body wc-width-full">
                            <textarea class="form-control " placeholder="Comment..." rows="1" style="width: 400px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default wc-news-post-wrap " >
                <div class="panel-heading">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/d1.jpg') !!}"
                                 style="width: 50px;height: 50px;" />
                        </a>
                        <div class="media-body">
                            <a href="#">username username username</a><br/>
                            <span>01-01-2017 at 1h</span>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <img src="{!! asset('public/imgtest/b.jpg') !!}" />
                </div>
                <div class="panel-body wc-padding-top-none wc-padding-bot-none">
                    <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                    Field : </span> name field
                </div>
                <div class="panel-body">
                    <div class="media wc-width-full">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/e.jpg') !!}"
                                 style="width: 40px; height: 40px;" />
                        </a>
                        <div class="media-body wc-width-full">
                            <textarea class="form-control " placeholder="Comment..." rows="1" style="width: 400px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default wc-news-post-wrap " >
                <div class="panel-heading">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/d2.jpg') !!}"
                                 style="width: 50px;height: 50px;" />
                        </a>
                        <div class="media-body">
                            <a href="#">username username username</a><br/>
                            <span>01-01-2017 at 1h</span>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    content text content text content text content text content text content text content text
                    content text content text content text content text content text content text content text
                </div>
                <div class="panel-body wc-padding-top-none wc-padding-bot-none">
                    <span class="glyphicon glyphicon-thumbs-up"></span> 1000 &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-comment"></span> 1000 &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                    Field : </span> name field
                </div>
                <div class="panel-body">
                    <div class="media wc-width-full">
                        <a class="pull-left" href="#">
                            <img class="media-object wc-border-radius-4" src="{!! asset('public/imgtest/e.jpg') !!}"
                                 style="width: 40px; height: 40px;" />
                        </a>
                        <div class="media-body wc-width-full">
                            <textarea class="form-control " placeholder="Comment..." rows="1" style="width: 400px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end news content -->
    </div>

    {{--menu--}}
    @include('components.menu.menu')
</div>