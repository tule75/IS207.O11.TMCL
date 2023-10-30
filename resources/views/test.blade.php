<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Ajax Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="/api/get/provinces" method="post">
        @csrf
        <button>click here</button>
    </form>
    <select id="dynamicSelect"></select>


    <script>
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function () {
            $('#dynamicSelect').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                $.ajax({
                    type: 'post',
                    url: '/api/get/districts', // Thay thế bằng URL của bạn
                    data: {
                        'province_id': 1,  
                    },
                    success: function (data, textStatus, xhr) {
                        var select = document.getElementById('dynamicSelect'); // Hiển thị phản hồi trong phần tử HTML có id là 'result'
                        data.forEach(function(item) {
                            var option = document.createElement('option');
                            option.value = item.gso_id;
                            option.text = item.name;
                            select.appendChild(option);
                        });
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr);
                    }
                });
            });
        });
    </script>
</body>
</html>
