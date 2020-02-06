@extends('fruit.index')

@section('titlePage')
    Knowledge
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
                    <li class="<?php if ($typeKnowledge == '' or $typeKnowledge == 'beautiful') echo 'active'; ?>">
                        <a href="{!! URL::route('wc.fruit.knowledge.get','beautiful') !!}">Làm đẹp và trái
                            cây</a>
                    </li>
                    <li class="<?php if ($typeKnowledge == 'food') echo 'active'; ?>">
                        <a href="{!! URL::route('wc.fruit.knowledge.get','food') !!}">Ẩm thực và trái cây</a>
                    </li>
                    <li class="<?php if ($typeKnowledge == 'health') echo 'active'; ?>">
                        <a href="{!! URL::route('wc.fruit.knowledge.get','health') !!}">Y học và trái cây</a>
                    </li>
                    <li class="<?php if ($typeKnowledge == 'tips') echo 'active'; ?>">
                        <a href="{!! URL::route('wc.fruit.knowledge.get','tips') !!}">Mẹo vặt</a>
                    </li>
                </ul>
            </div>
            <div class="panel-body ">
                <div class="col-md-12">
                    @for($i=0; $i<= 4; $i++)
                        @include('fruit.knowledge.knowledge-object')
                    @endfor
                </div>
                <div class="col-md-12 text-center wc-padding-10 wc-margin-bot-40">
                    <a href="#"> Xem them</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- news on action page --}}
@section('wcFruitNews')

    @include('fruit.knowledge.components.knowledge-news')
@endsection
