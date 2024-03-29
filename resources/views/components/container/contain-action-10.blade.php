@extends('components.container.contain-action-wrap')
@section('wc_action_wrap')
    <div id="wc_content_action" class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 wc-position-abs wc-zindex-2 wc-margin-top-40 wc-border-radius-10 wc-padding-none wc-bg-white wc-overflow-auto">
        @yield('wc_content_action')
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            hWindow = window.innerHeight;//screen.height;
            $('#wc_content_action').css('max-height',hWindow-80);
        });
    </script>
@endsection