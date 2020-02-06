

$(document).ready(function(){
    // search
    $('.wcFruitSearchKey').on('keyup', function(){
        key = $(this).val();
        if(key != ''){
            $('#limitSearch').show();
        }else{
            $('#limitSearch').hide();
        }
    });
    // end search

    $('.wc-fruit-login-get-a').on('click',function(){
        u = $(this).data('url');
        id = 0;
        $.ajax({
            url: u + '/' + id,
            type: 'GET',
            cache: false,
            data:{'id':id},
            success:function(data){
                $('#wc_wrapper').append(data);
            }
        });
    });
    // register
    $('.wc-fruit-register-get-a').on('click',function(){
        u = $(this).data('url');
        id = 0;//$(this).data('id');
        $.ajax({
            url: u + '/' + id,
            type: 'GET',
            cache: false,
            data:{'id':id},
            success:function(data){
                $('#wc_wrapper').append(data);
            }
        });
    });
    // end register

    // -- forget password --
    $('.wc-fruit-forget-pass-get-a').on('click',function(){
        u = $(this).data('url');
        id = 0;//$(this).data('id');
        $.ajax({
            url: u + '/' + id,
            type: 'GET',
            cache: false,
            data:{'id':id},
            success:function(data){
                $('#wc_wrapper').append(data);
            }
        });
    });
    // --- end forget password ---
});
