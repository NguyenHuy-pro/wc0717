@extends('wc-manage.components.contain-action-wrap')
@section('wc_m_contain_action_wrap')
    <div id="wc_m_content_action"
         class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 wc-position-abs wc-zindex-2 wc-margin-top-40 wc-border-radius-10 wc-padding-none wc-bg-white wc-overflow-auto">
        @yield('wc_m_content_action')
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            hWindow = window.innerHeight;//screen.height;
            $('#wc_m_content_action').css('max-height', hWindow - 80);
        });
    </script>
@endsection