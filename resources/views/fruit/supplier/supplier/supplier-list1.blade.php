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
            <option>Tat ca cac loai</option>
            <option>B??i</option>
            <option>S?u Riêng</option>
            <option>Chôm Chôm</option>
            <option>......</option>
        </select>
        <select class="pull-right wc-margin-8">
            <option>Ca nuoc</option>
            <option>V?nh Long</option>
            <option>Ti?n Giang</option>
            <option>B?n Tre</option>
            <option>.....</option>
        </select>
    </div>
    <div class="panel panel-default wc-margin-padding-none wc-border-none">
        @for($i=0; $i<= 4; $i++)
            @include('fruit.supplier.supplier.supplier-object')
        @endfor
    </div>
    <div class="col-md-12 text-center wc-padding-10 wc-margin-bot-40">
        <a href="#"> Xem them</a>
    </div>
</div>
