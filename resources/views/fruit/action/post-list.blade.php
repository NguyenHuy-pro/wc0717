<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/17/2016
 * Time: 11:16 PM
 */
?>
<div class="row">
    <div class="col-md-12">
        @for($i = 0; $i <= 2; $i++)
            @include('fruit.action.post-object')
        @endfor
    </div>
    <div class="text-center wc-padding-10 wc-margin-bot-40">
        <a href="#">Xem thêm</a>
    </div>
</div>
