@for($i = 1;$i <= 121; $i = $i + 1)
    @if($i <= 11 or $i == 22 or $i == 33 or $i == 44 or $i == 55 or $i == 66 or $i == 77 or $i == 88 or $i == 99 or $i == 110 or $i == 121)
        <?php
        $bg = 'bgPublica';
        ?>
    @else
        <?php
        $bg = '';
        ?>
    @endif
    <div class="wc-land {{ $bg }}">
        @if(11 < $i && $i< 22)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(22 < $i && $i< 33)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(33 < $i && $i< 44)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(44 < $i && $i< 55)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(55 < $i && $i< 66)
            @if($i%2)
                @include('wall.house.house')
            @else
                @if($i == 59 or $i == 65)
                    @include('wall.house.house')
                @else
                    <div class="wc-land-none ">
                        <div class="wc-land-none-act ">Chọn vị trí</div>
                    </div>
                @endif
            @endif
        @elseif(66 < $i && $i< 77)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(77 < $i && $i< 88)
            @if($i%2)
                @include('wall.house.house')
            @else
                @if($i == 79 or $i == 83)
                    @include('wall.house.house')
                @else
                    <div class="wc-land-none ">
                        <div class="wc-land-none-act ">Chọn vị trí</div>
                    </div>
                @endif
            @endif
        @elseif(88 < $i && $i< 99)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(99 < $i && $i< 110)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @elseif(110 < $i && $i< 121)
            @if($i%2)
                @include('wall.house.house')
            @else
                <div class="wc-land-none ">
                    <div class="wc-land-none-act ">Chọn vị trí</div>
                </div>
            @endif
        @endif
    </div>
@endfor