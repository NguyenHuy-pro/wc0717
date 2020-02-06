<div class="row">
    @for($i = 1; $i <= 10; $i++)
        <div class="col-xs-4 col-sm-3 col-md-3">
            <div class="text-center wc-border-1 wc-border-radius-10 wc-padding-5 wc-margin-5"
                 style=" width: 150px;height: 100px">
                <a href="{!! URL::route('wc.fruit.fruit.detail.get','name-fruit') !!}">
                    <img style="width: 100%;height: 70px" src='{!! asset("public/imgtest/fruit/fruit_$i.jpg") !!}'
                         alt="...">
                </a>
                <a href="{!! URL::route('wc.fruit.fruit.detail.get','name-fruit') !!}" target="_blank">Tên trái
                    cây
                </a>
            </div>
        </div>
    @endfor
</div>
<div class="col-md-12 wc-padding-10 text-center wc-margin-bot-40">
    <a>Xem thêm</a>
</div>