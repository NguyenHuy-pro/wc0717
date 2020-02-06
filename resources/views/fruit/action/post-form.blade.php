<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/17/2016
 * Time: 11:16 PM
 */
?>
<div class="panel panel-default wc-margin-bot-10">
    <div class="panel-heading wc-bg-none">
        <i class="fa fa-comment-o"></i>
        Cập nhật trạng thái

    </div>
    <div class="panel-body wc-padding-bot-none wc-padding-top-none">
        {{--form post--}}
        <div class="col-md-12">
            <div class="row">
                <form class="wcFruitPostForm form-horizontal" enctype="multipart/form-data" method="post" action="">
                    <div class="form-group wc-padding-none " >
                        <textarea name="txtPostContent" class="txtPostContent form-control wc-border-none " rows="3" style="max-width: 100%;"></textarea>
                    </div>

                    <div class="postFormAction form-group wc-display-none ">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-camera pull-left wc-font-size-20 "></span>
                            <button type="button" class="btn btn-primary btn-xs pull-right ">Đăng</button>
                            <div class="btn-group pull-right wc-margin-rig-10">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Người xem <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#">Mọi người</a></li>
                                    <li><a href="#">Bạn bè</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>


