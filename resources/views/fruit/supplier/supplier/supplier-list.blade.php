<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 11/13/2016
 * Time: 12:08 AM
 */
?>
<div class="row">
    <div class="col-md-12">
        <select class="pull-right wc-margin-8">
            <option>Tất cả các loại</option>
            <option>Bưởi</option>
            <option>Sầu riêng</option>
            <option>Chôm chôm</option>
            <option>......</option>
        </select>
        <select class="pull-right wc-margin-8">
            <option>Cả nước</option>
            <option>Vĩnh Long</option>
            <option>Tiền Giang</option>
            <option>Bến Tre</option>
            <option>.....</option>
        </select>
    </div>
    <div class="panel panel-default wc-margin-padding-none wc-border-none">
        @for($i=0; $i<= 4; $i++)
            @include('fruit.supplier.supplier.supplier-object')
        @endfor
    </div>
    <div class="col-md-12 text-center wc-padding-10 wc-margin-bot-40">
        <a href="#"> Xem thêm</a>
    </div>
</div>
