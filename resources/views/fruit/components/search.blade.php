{{--form search--}}
<div class="row wc-padding-bot-10 ">
    <form class="col-md-12" method="POST" action="{!! route('wc.fruit.search.post') !!}">
        <div class="input-group" >
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <input class="form-control wcFruitSearchKey wc-bg-none wc-border-radius-4" name="search" type="text" placeholder="Nhập thông tin cần tìm" value="{!! old('searchKey') !!}" >
                <span class="input-group-btn">
                    <button class="wc-fruit-search-act wc-bg-none btn btn-default" type="submit">Tìm</button>
                </span>
        </div>

        {{--advanced search--}}
        <div id="limitSearch" class="col-md-12 col-lg-12 wc-display-none">
            <div class="checkbox">
                <em>
                    <label>
                        <input type="checkbox" checked="checked" value="">Tất cả
                    </label>
                    <label>
                        <input type="checkbox" value="">Trái cây
                    </label>
                    <label>
                        <input type="checkbox" value="">Kiến thức
                    </label>
                    <label>
                        <input type="checkbox" value="">Nhà cung cấp
                    </label>
                </em>
            </div>
        </div>
    </form>
</div>