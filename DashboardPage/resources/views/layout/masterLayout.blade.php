<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','not found')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('include/header')
    @yield('content')
    @include('include/footer')
</body>
</html>