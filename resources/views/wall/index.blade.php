@extends('master')
@section('titlePage')
    Wall connect
@endsection()

@section('shortcutPage')
    <link rel="shortcut icon" href="{!! asset('public/imgtest/travel_1.jpg') !!}"/>
@endsection

{{--include css of wal/ page--}}
@section('wcMasterCss')
    <link href="{{ url('public/wall/css/wall.css')}}" rel="stylesheet">
@endsection

{{--include js--}}
@section('wcMasterJsHeader')
    <script src="{{ url('public/wall/js/wall.js')}}"></script>
@endsection

{{--main content--}}
@section('wcMasterContent')
    {{--move trend--}}
    @include('wall.components.move.move')

    {{--content--}}
    <div class="wc-wall-view">
        @include('wall.district.district')
    </div>

@endsection()


