<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/17/2016
 * Time: 11:16 PM
 */
?>
<div class="panel panel-default wc-fruit-post-object  wc-margin-bot-10 ">
    <div class="panel-heading wc-bg-none wc-border-none">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <a href="#" target="_blank">
                    <img class="media-object wc-img-32 wc-border-radius-4" src="{!! asset('public/imgtest/e.jpg') !!}"/>
                </a>
                &nbsp;
                <a href="#" target="_blank">
                    Tên người dùng
                </a>
            </div>
            <!-- grant post -->
            <div class="col-lg-4 text-right ">
                <span>12/15/12456</span>
                <i class="fa fa-chevron-down dropdown-toggle wc-font-size-14" data-toggle="dropdown"></i>
                <ul class="dropdown-menu dropdown-menu-right wc-font-size-12">
                    <li>
                        <a class="" href="#">Bào cáo bài viết</a>
                    </li>
                    <li>
                        <a class="" data-href="#">
                            Sữa
                        </a>
                    </li>
                    <li class="">
                        <a class="" data-href="#">Xóa</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    {{--text post--}}
    <div class="panel-body">

        {{--content--}}
        <div class="row">
            <div class="col-md-12">
                noi dung post
            </div>
        </div>

        {{--image--}}
        <div class="row">
            <div class="col-md-12 tf-padding-top-10 tf-padding-bot-10">
                <img src="{!! asset('public/imgtest/e.jpg') !!}"/>
            </div>
        </div>

        {{--post statistic--}}
        <div class="row">
            <div class="col-md-12 wc-fruit-post-object-statistic text-right">
                {{--comment--}}
                <span class="glyphicon glyphicon-comment"></span>
                <span class="">10</span>
                <a class="" href="#">Comment</a>

                {{--love--}}
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <span class="">5</span>
                <a class="" href="#">Like</a>

                <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;
                Lĩnh vực : </span> Tên lĩnh vực

            </div>
        </div>

        {{--comment--}}
        <div class="row">
            {{--form comment--}}
            <div class="col-md-12 wc-vertical-bottom">
                <form class="input-group" method="post" action="" style="background-color: whitesmoke;">
                    <textarea class="form-control wc-border-none wc-bg-none tf-border-none" name="txtCommentContent"
                              rows="1" placeholder="Enter comment"></textarea>
                    <span class="input-group-btn wc-border-none">
                        <button class="btn btn-default wc-border-none wc-bg-none" type="button">
                            <a class=" tf-link">Gửi</a>
                        </button>
                    </span>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                </form>
            </div>

            {{--contain comment--}}
            <div class="col-md-12 ">

                {{--object comment--}}
                <div class="col-md-12 wc-padding-top-5 wc-padding-bot-5 wc-padding-rig-none">
                    <div class="media wc-position-rel wc-padding-rig-none">
                        <a class="pull-left" href="#" target="_blank">
                            <img class="media-object wc-img-32 wc-border-radius-4"
                                 src="{!! asset('public/imgtest/e.jpg') !!}"/>
                        </a>

                        <div class="media-body wc-padding-none">
                            <div class="col-md-12 wc-padding-none">
                                <a href="#" target="_blank">
                                    custoner name
                                </a>
                            </div>
                            <div class="col-md-12 wc-padding-none">
                                comment content - comment content
                            </div>
                        </div>

                        <div class="wc-position-abs " style="top: 0; right: 0;">
                            <i class="fa fa-chevron-down dropdown-toggle wc-font-size-14"
                               data-toggle="dropdown"></i>
                            <ul class="dropdown-menu dropdown-menu-right wc-font-size-12">
                                <li>
                                    <a class="" data-href="#">
                                        Edit
                                    </a>
                                </li>
                                <li class="">
                                    <a class="" data-href="#">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 wc-padding-top-5 wc-padding-bot-5 wc-padding-rig-none">
                    <div class="media wc-position-rel wc-padding-rig-none">
                        <a class="pull-left" href="#" target="_blank">
                            <img class="media-object wc-img-32 wc-border-radius-4"
                                 src="{!! asset('public/imgtest/e.jpg') !!}"/>
                        </a>

                        <div class="media-body wc-padding-none">
                            <div class="col-md-12 wc-padding-none">
                                <a href="#" target="_blank">
                                    custoner name
                                </a>
                            </div>
                            <div class="col-md-12 wc-padding-none">
                                comment content - comment content
                            </div>
                        </div>

                        <div class="wc-position-abs " style="top: 0; right: 0;">
                            <i class="fa fa-chevron-down dropdown-toggle wc-font-size-14"
                               data-toggle="dropdown"></i>
                            <ul class="dropdown-menu dropdown-menu-right wc-font-size-12">
                                <li>
                                    <a class="" data-href="#">
                                        Edit
                                    </a>
                                </li>
                                <li class="">
                                    <a class="" data-href="#">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{--view more old comment--}}
            <div class="col-md-12 wc-padding-lef-30 wc-padding-top-5 wc-padding-bot-5 ">
                <span class="glyphicon glyphicon-comment"></span>
                <a href="">View more comment</a>
            </div>
        </div>
    </div>

</div>
