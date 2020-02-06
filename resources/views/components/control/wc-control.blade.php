<div id="wcMasterControl" class="wc-master-control wc-zindex-6 wc-display-none">
    <div class="wc-bg-10 wc-width-height-full wc-opacity-8 " ></div>
    <table class="wc-trend wc-width-height-full" border="1">
        <tr>
            {{--wall page--}}
            <td>
                <a href="{!! URL::route('wc.wall') !!}">
                    <img src="{!! asset('public/imgtest/social.jpg') !!}"/>
                </a>
            </td>

            {{--resident page--}}
            <td >
                <a href="{!! URL::route('wc.home') !!}">
                    <img src="{!! asset('public/imgtest/home.jpg') !!}"/>
                </a>
            </td>

            {{--fruit page--}}
            <td >
                <a href="{!! URL::route('wc.fruit.get') !!}">
                    <img src="{!! asset('public/imgtest/fruit.jpg') !!}"/>
                </a>
            </td>

        </tr>
        <tr>
            {{--travel page--}}
            <td>
                <a href="{!! URL::route('wc.travel') !!}">
                    <img src="{!! asset('public/imgtest/travel_1.jpg') !!}"/>
                </a>
            </td>

            {{--food page--}}
            <td>
                <a href="{!! URL::route('wc.food') !!}">
                    <img src="{!! asset('public/imgtest/food.jpg') !!}"/>
                </a>
            </td>

            {{--extend--}}
            <td>
                <span class="glyphicon glyphicon-plus wc-link-white-bold wc-font-size-20"></span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="glyphicon glyphicon-plus wc-link-white-bold wc-font-size-20"></span>
            </td>
            <td>
                <span class="glyphicon glyphicon-plus wc-link-white-bold wc-font-size-20"></span>
            </td>
            <td>
                <span class="glyphicon glyphicon-plus wc-link-white-bold wc-font-size-20"></span>
            </td>
        </tr>
    </table>
</div>