@extends('master')
@section('titlePage')
    Fruit
@endsection()

{{--shortcut icon--}}
@section('shortcutPage')
    <link rel="shortcut icon" href="{!! asset('public/imgtest/fruit.jpg') !!}" xmlns="http://www.w3.org/1999/html"/>
@endsection

{{--css--}}
@section('wcMasterCss')
    <link href="{{ url('public/fruit/css/fruit.css')}}" rel="stylesheet">
@endsection

{{--js--}}
@section('wcMasterJsHeader')
    <script src="{{ url('public/fruit/js/fruit.js')}}"></script>
@endsection

{{--main content--}}
@section('wcMasterContent')
    <div class="wcFruitMainWrap wc-height-full wc-overflow-auto wc-bg-1">
        <div class="container">
            <div class="row" >

                {{--left content--}}
                <div class="col-xs-12 col-sm-8 col-md-9  wc-fruit-left">
                    {{--user--}}
                    @yield('wcFruitUser')

                    {{--search form--}}
                    @yield('wcFruitSearch')

                    {{--banner--}}
                    @yield('wcFruitBanner')

                    {{--menu--}}
                    <div class="col-md-12">
                        @yield('wcFruitMenu')
                    </div>

                    {{--content--}}
                    <div class="row">
                        <div id="wcFruitMainContent" class="col-md-12">
                            @yield('wcFruitMainContent')
                        </div>
                    </div>
                </div>

                {{--right content--}}
                <div class="hidden-xs col-sm-4 col-md-3 wc-fruit-right">
                    {{--banner of page--}}
                    @include('fruit.components.logo')

                    {{--news page--}}
                    @yield('wcFruitNews')

                </div>

            </div>
        </div>
    </div>
@endsection()

