@extends('fruit.index')

@section('titlePage')
    Fruit/list
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
    <div class="col-md-12 wc-bg-white" style="border: 1px solid #d7d7d7;">
        <div class="row">
            <div class="col-md-12">
                <select class="wc-float-right wc-margin-8">
                    <option>Tất cả các loại</option>
                    <option>Bưởi</option>
                    <option>Sầu Riêng</option>
                    <option>Chôm Chôm</option>
                    <option>.......</option>
                </select>
                <select class="wc-float-right wc-margin-8">
                    <option>Cả nước</option>
                    <option>Tỉnh thành 1</option>
                    <option>Tỉnh thành 2</option>
                    <option>Tỉnh thành 3</option>
                    <option>......</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{--list fruit--}}
                @include('fruit.fruit.fruit-list')
            </div>
        </div>
    </div>
@endsection

{{-- news on action page --}}
@section('wcFruitNews')

    {{--supplier news--}}
    @include('fruit.supplier.components.supplier-news')

    @include('fruit.fruit.components.fruit-news')

@endsection
