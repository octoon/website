<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>octoon - @yield('title')</title>
    @yield('ref')
    @yield('script')
    @yield('style')
</head>

<body>
@yield('header')
@yield('content')
@yield('footer')
</body>

</html>