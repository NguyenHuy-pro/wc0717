@extends('fruit.index')

@section('titlePage')
    knowledge
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
    <div class="col-md-12 wc-bg-white">
        <div class="row">
            <div class="col-md-12">
                <ul class="pager ">
                    <li class="previous">
                        <a class="" href="{!! route('wc.fruit.knowledge.get',$typeKnowledge) !!}">&larr; Trở về</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
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

                &nbsp;&nbsp;&nbsp; <em>Tác giả : </em><a>Tên người dùng</a>
            </div>
            <div class="col-md-12">
                <h3>Tiêu đề bài viết về kiến thức</h3>

                <p>
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bainoi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                </p>

                <p class="text-center">
                    <img class="media-object wc-border-radius-4"
                         src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                </p>

                <p>
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bainoi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung
                    bai
                </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-left wc-margin-16">
                <em>Nguồn :</em> www.asdsas.com/ssdsadas/dsadsdsdsd /dasdsdsdsdsdsdasdsdds-sdasd-sdas.html
            </div>
        </div>

        {{--binh luan--}}
        @include('fruit.knowledge.comment.comment')

        {{--bai viet lien quan--}}
        <div class="row">
            <div class="panel panel-default wc-margin-padding-none wc-border-none">
                <div class="panel-heading">
                    Bai viet lien quan
                </div>
                <div class="panel-body">
                    @for($i = 0; $i<=5; $i++)
                        <div class="col-md-4 wc-padding-bot-30">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object wc-img-50 wc-border-radius-4"
                                         src="{!! asset('public/imgtest/fruit/buoi_1.jpg') !!}"/>
                                </a>

                                <div class="media-body">
                                    <a href="#">Ten cu bai viet Ten cu bai viet</a><br/>
                                    Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan bai viet Noi dung ngan
                                   ....<a href="">chi tiet</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </div>
@endsection()
