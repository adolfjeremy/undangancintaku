<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/styles/style.css">
</head>
<body>
    @include('includes.navbar')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
    <script src="/assets/vendor/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/navbarOnScroll.js"></script>
    <script src="/assets/js/openMobileNavbar.js"></script>
</body>
</html>