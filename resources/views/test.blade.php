<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Ajax Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="/watch" method="post">
        @csrf 
        name <input name="name">
        <br>
        price <input name="price" type="number">
        storage <input name="storage" type="number">
        brand  <input name="brand_id" type="number">
        category <input name="category_id" type="number">

        <button>Clickk</button>
    </form>    
   


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
                    url: '/api/get/provinces', // Thay thế bằng URL của bạn
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
            // call api district
            $('#dynamicSelectDistrict').click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                
                $.ajax({
                    type: 'post',
                    url: '/api/get/districts', // Thay thế bằng URL của bạn
                    data: {
                        'province_id': '02'
                    },
                    success: function (data, textStatus, xhr) {
                        var select = document.getElementById('dynamicSelectDistrict'); // Hiển thị phản hồi trong phần tử HTML có id là 'result'
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
