{{--Menu--}}
<?php
$fruitMenu = [
        [
                'object' => 'action',
                'label' => 'Hoạt động',
                'href' => route('wc.fruit.action.get'),
                'subMenu' => null
        ],
        [
                'object' => 'list',
                'label' => 'Danh mục',
                'href' => route('wc.fruit.list.get'),
                'subMenu' => null
        ],
        [
                'object' => 'knowledge',
                'label' => 'Kiến thức',
                'href' => route('wc.fruit.knowledge.get'),
                'subMenu' => null
        ],
        [
                'object' => 'supplier',
                'label' => 'Nhà cung cấp',
                'href' => route('wc.fruit.supplier.get'),
                'subMenu' => null
        ],
        [
                'object' => 'posts',
                'label' => 'Viết bài',
                'href' => route('wc.fruit.article.posts.get'),
                'subMenu' => null
        ],
        [
                'object' => 'advisory',
                'label' => 'Tư vấn',
                'href' => route('wc.fruit.advisory.get'),
                'subMenu' => null
        ]
]
?>

<div class="row wc-zindex-1">
    <div class="navbar-xs">
        <div class="navbar-primary">
            <nav class="navbar navbar-default navbar-static-top wc-fruit-menu wc-bg-8" role="navigation">
                {{--Brand and toggle get grouped for better mobile display--}}
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                {{--Collect the nav links, forms, and other content for toggling--}}
                <div class="collapse navbar-collapse wc-margin-bot-10 " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left wc-margin-padding-none ">
                        @if(count($fruitMenu) > 0)
                            @foreach($fruitMenu as $menu)
                                <li>
                                    <a class="@if($menu['object']==$accessObject) active  @endif "
                                       href="{!! $menu['href'] !!}">
                                        {!! $menu['label'] !!}
                                    </a>
                                    @if(!is_null($menu['subMenu']))
                                        {{--extend later (when exists submenu)--}}
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>