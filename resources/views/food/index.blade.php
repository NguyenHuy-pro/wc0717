@extends('master')
@section('titlePage')
    Food
@endsection()
@section('shortcutPage')
    <link rel="shortcut icon" href="{!! asset('public/imgtest/food.jpg') !!}" />
@endsection
@section('wc_main_content')
    <div class="wc-width-height-full wc-overflow-auto" style="background-color: gray;">
        <div class="container">
            <div class="row" style="background-color: white; height: 1000px;">
                Content Food
            </div>
        </div>
    </div>
@endsection()
