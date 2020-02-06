@extends('fruit.index')

@section('titlePage')
    Fruit/post
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
    <div class="wc-margin-padding-none wc-bg-4">
        <div class="panel panel-default wc-margin-padding-none wc-border-none ">
            <div class="panel-heading wc-bg-none wc-border-none">
                <ul class="nav nav-tabs" role="tablist">
                    <li class=" @if($accessSupplier == 'list') active @endif">
                        <a href="{!! route('wc.fruit.supplier.get') !!}">Danh sách</a>
                    </li>
                    <li class="@if($accessSupplier == 'register') active @endif">
                        <a href="{!! route('wc.fruit.supplier.register.get') !!}">Đăng ký</a>
                    </li>
                </ul>
            </div>
            <div class="panel-body ">
                <div class="col-md-12">
                    @if($accessSupplier == 'register')
                        @include('fruit.supplier.register.supplier-register')
                    @else
                        @include('fruit.supplier.supplier.supplier-list')
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

{{-- news on action page --}}
@section('wcFruitNews')

    {{--@include('fruit.action.components.action-news')--}}

    {{--fruit news--}}
    @include('fruit.fruit.components.fruit-news')

    {{--knowledge news--}}
    @include('fruit.knowledge.components.knowledge-news')

@endsection

