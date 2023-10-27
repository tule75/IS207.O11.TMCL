<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{Route('watch.store')}}" method="post">
        @csrf
        <x-primary-button class="ml-4">
                {{ __('hello') }}
        </x-primary-button>
    </form>
    
</body>
</html>
