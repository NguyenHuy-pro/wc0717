@extends('fruit.index')

@section('titlePage')
    Fruit/active
@endsection

{{--js--}}
@section('wcMasterJsHeader')
    <script src="{{ url('public/fruit/js/action.js')}}"></script>
@endsection

{{--========== ========== ========== content ========== ========== ==========--}}
{{--login info--}}
@section('wcFruitUser')
    @include('fruit.components.user')
@endsection

{{--search    --}}
@section('wcFruitSearch')
    @include('fruit.components.search')
@endsection

{{--banner--}}
@section('wcFruitBanner')
    @include('fruit.components.banner')
@endsection

{{--menu--}}
@section('wcFruitMenu')
    @include('fruit.components.menu')
@endsection

{{--main content--}}
@section('wcFruitMainContent')
    <div class="row">
        <div class="col-md-12">

            {{--from status update--}}
            @include('fruit.action.post-form')
        </div>

        <div class="col-md-12">
            {{--post content--}}
            @include('fruit.action.post-list')
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
