/**
 * Created by HUY on 10/17/2016.
 */
$(document).ready(function(){
    $('.wcFruitMainWrap').on('click', '.wcFruitPostForm .txtPostContent', function(){
        $('.wcFruitPostForm').find('.postFormAction').show();
    });
});