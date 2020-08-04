<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    @include('layouts.header')
    <div id="content">
        <h1>Hoàng Chiêu</h1>
        @yield('NoiDung')
    </div>
    @include('layouts.footer')
</body>
</html>