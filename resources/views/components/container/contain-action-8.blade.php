@extends('components.container.contain-action-wrap')
@section('wcActionWrap')
    <div id="wcContentAction" class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 wc-position-abs wc-zindex-2 wc-margin-top-40 wc-border-radius-10 wc-bg-white wc-overflow-auto wc-padding-none">
        @yield('wcContentAction')
        test
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var windowHeight = window.innerHeight;//screen.height;
            $('#wcContentAction').css('max-height',windowHeight-80);
        });
    </script>
@endsection
