$(document).ready(function(){
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $(".cart").click(function(){
        let id = $(this).parent('.product-object').children('a').attr('href');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        $.ajax({
            url: "/cart",
            method: 'POST',
            data: {'watch_id': id.replace('/watch/', '')},
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, status, error) { 
                if(error == 'Unauthorized') {
                    window.location = '/login';
                }
            }
        })
    });
  });