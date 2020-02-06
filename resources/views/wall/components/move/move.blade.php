<div id="wc-move" class="wc-move">
    <div class="wc-move-mask wc-width-height-full wc-opacity-6"></div>
    <div class="wc-move-trend wc-move-top">
        <span class="glyphicon glyphicon-arrow-up wc-font-size-24" trend="top" onclick="wc_moveWall('t');" ></span>
    </div>
    <div class="wc-move-trend wc-move-right">
        <span class="glyphicon glyphicon-arrow-right wc-font-size-24" trend="right" onclick="wc_moveWall('r');" ></span>
    </div>
    <div class="wc-move-trend wc-move-center">
        <span class="glyphicon glyphicon-screenshot wc-font-size-24" trend="center" onclick="wc_moveWall('c');" ></span>
    </div>
    <div class="wc-move-trend wc-move-bottom">
        <span class="glyphicon glyphicon-arrow-down wc-font-size-24" trend="bottom" onclick="wc_moveWall('b');" ></span>
    </div>
    <div class="wc-move-trend wc-move-left">
        <span class="glyphicon glyphicon-arrow-left wc-font-size-24" trendt="left" onclick="wc_moveWall('l');" ></span>
    </div>
</div>
<script type="text/javascript">
    $('#wc-move').draggable();
</script>