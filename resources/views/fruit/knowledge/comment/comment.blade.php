<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 11/2/2016
 * Time: 1:28 AM
 */
?>
<div class="row">

    <div class="col-md-12 wc-padding-top-10 wc-padding-bot-10">
        <form method="post" action="">
            <textarea class="form-control " style="max-width: 100%;" placeholder="nhap binh luan...." rows="2"></textarea><br/>
            <button type="button" class="pull-right btn btn-primary btn-sm ">Gui</button>
        </form>
    </div>
    <div class="col-md-12 wc-padding-bot-10">
        <div class="col-md-12" style="background-color: whitesmoke;">
            @for($i=0; $i<=4;$i++)
                @include('fruit.knowledge.comment.comment-object')
            @endfor

            <div class="col-md-12 wc-padding-10 ">
                <a href="#">Xem them binh luan</a>
            </div>
        </div>
    </div>
</div>
