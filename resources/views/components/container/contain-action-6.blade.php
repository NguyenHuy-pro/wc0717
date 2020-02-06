@extends('components.container.contain-action-wrap')
@section('wc_action_wrap')
    <div id="wc_content_action" class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 wc-position-abs wc-zindex-2 wc-margin-top-40 wc-border-radius-10 wc-padding-none wc-bg-white wc-overflow-auto">
        @yield('wc_content_action')
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            hWindow = window.innerHeight;
            $('#wc_content_action').css('max-height',hWindow-80);
        });
    </script>
@endsection