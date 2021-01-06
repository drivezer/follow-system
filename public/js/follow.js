$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.btn-follow').click(function() {
        var user_id = $(this).data('id');
        var object = $(this);
        var currentFollowers = parseInt(object.parent('div').find('.followers').text());
        var currentFollowings = parseInt(object.parent('div').find('.followings').text());
        $.ajax({
            type: 'POST',
            url: 'follow',
            data: { 'user_id': user_id },
            datatype: 'JSON',
            success: function(data) {
                if(data.success == true){
                    object.find("strong").text("เลิกติดตาม");
                    object.parent('div').find('.followers').text(currentFollowers + 1);
                }else{
                    object.find("strong").text("ติดตาม");
                    object.parent('div').find('.followers').text(currentFollowers - 1);
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
})
