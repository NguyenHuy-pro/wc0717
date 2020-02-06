@extends('fruit.index')

@section('titlePage')
    Fruit/answer
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
    <div class="wc-margin-padding-none ">
        <div class="row">
            <form class="col-lg-12" enctype="multipart/form-data" action="" method="POST">
                <div class="form-group">
                    <label>Nội dung câu hỏi:</label>
                    <select>
                        <option>Tổng hợp</option>
                        <option>Làm đẹp</option>
                        <option>Ẩm thực</option>
                        <option>Sức khỏe</option>
                    </select>
                    <textarea id="txtContact" class="form-control" name="txtContact" rows="5"></textarea>
                </div>
                <div class="form-group text-right">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <button type="submit" class="btn btn-default">Gửi</button>
                </div>
            </form>
        </div>
        <div class="panel panel-default wc-margin-padding-none wc-border-none">
            <div class="panel-heading wc-bg-2">
                Danh sách tư vấn
            </div>
            <div class="panel-body ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="media" style="border-bottom: 1px solid lightgrey;">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-32 wc-border-radius-4"
                                     src="{!! asset('public/imgtest/d2.jpg') !!}"/>
                            </a>

                            <div class="media-body">
                                <div>
                                    <a href="#">Tên người dùng</a> <em>01-01-2017 lúc 1h</em> <br/>
                                    content text content text content text content text content text content text
                                    content text
                                    content text content text content text content text content text content text
                                    content text
                                </div>
                                <div class="text-right">
                                    <a>Trả lời</a> : 100
                                </div>
                                <div class="wc-margin-top-16">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="trả lời..." style="width: 100%;"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                        <button type="submit" class="btn btn-default">Hủy</button>
                                        <button type="submit" class="btn btn-default">Gửi</button>
                                    </div>
                                </div>
                                <div class="wc-margin-top-16 wc-margin-bot-16">
                                    <div class="media wc-width-full">
                                        <a class="pull-left" href="#">
                                            <img class="media-object wc-img-32 wc-border-radius-4"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}"/>
                                        </a>

                                        <div class="media-body wc-width-full">
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung
                                            trả lời
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lờiNội dung trả lời Nội dung
                                            trả lời. Nội dung trả lời
                                        </div>
                                        <div class="text-right">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span><a>Thích</a>
                                        </div>
                                    </div>
                                    <div class="media wc-width-full">
                                        <a class="pull-left" href="#">
                                            <img class="media-object wc-img-32 wc-border-radius-4"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}"/>
                                        </a>

                                        <div class="media-body wc-width-full">
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung
                                            trả lời
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lờiNội dung trả lời Nội dung
                                            trả lời. Nội dung trả lời
                                        </div>
                                        <div class="text-right">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span><a>Thích</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left wc-padding-bot-10">
                                    <a>Xem thêm câu trả lời</a>
                                </div>
                            </div>
                        </div>
                        <div class="media " style="border-bottom: 1px solid lightgrey;">
                            <a class="pull-left" href="#">
                                <img class="media-object wc-img-32 wc-border-radius-4"
                                     src="{!! asset('public/imgtest/d2.jpg') !!}"/>
                            </a>

                            <div class="media-body">
                                <div>
                                    <a href="#">Tên người dùng </a> <em>01-01-2017 lúc 1h</em> <br/>
                                    content text content text content text content text content text content text
                                    content text
                                    content text content text content text content text content text content text
                                    content text
                                </div>
                                <div class="text-right">
                                    <a>Trả lời</a> : 100
                                </div>
                                <!--
                                <div class="wc-margin-top-16">
                                    <div class="form-group">
                                        <textarea class="form-control " placeholder="trả lời..." rows="2" style="width: 100%;"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                        <button type="submit" class="btn btn-default">Gửi</button>
                                    </div>
                                </div>!-->
                                <div class="wc-margin-top-16 wc-margin-bot-16">
                                    <div class="media wc-width-full">
                                        <a class="pull-left" href="#">
                                            <img class="media-object wc-img-32 wc-border-radius-4"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}"/>
                                        </a>

                                        <div class="media-body wc-width-full">
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung
                                            trả lời
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lờiNội dung trả lời Nội dung
                                            trả lời. Nội dung trả lời
                                        </div>
                                        <div class="text-right">
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
                                            <a>Thích</a>
                                        </div>
                                    </div>
                                    <div class="media wc-width-full">
                                        <a class="pull-left" href="#">
                                            <img class="media-object wc-img-32 wc-border-radius-4"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}"/>
                                        </a>

                                        <div class="media-body wc-width-full">
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung trả lời Nội dung
                                            trả lời
                                            Nội dung trả lời Nội dung trả lời Nội dung trả lờiNội dung trả lời Nội dung
                                            trả lời. Nội dung trả lời
                                        </div>
                                        <div class="text-right">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span><a>Thích</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left wc-padding-bot-10">
                                    <a>Xem thêm câu trả lời</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 text-center wc-padding-top-16 ">
                        <a>Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

{{-- news on action page --}}
@section('wcFruitNews')

    {{--knowledge news--}}
    @include('fruit.knowledge.components.knowledge-news')


@endsection
