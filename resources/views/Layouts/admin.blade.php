<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- ✅ Bootstrap as Asset -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset("bootstrap/icons/font/bootstrap-icons.css") }}">

    <style>
        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
            background-color: #f8f9fa;
        }

        #content {
            flex-grow: 1;
            margin-left: 260px;
            padding: 20px;
            transition: all 0.3s;
            width: 100%;
        }
    </style>

    @yield('styles') <!-- Extra styles from child pages -->
</head>
<body>

    @include('layouts.adminnavbar')

    <div id="content">
        @yield('content')
    </div>

    <!-- ✅ Bootstrap JS as Asset -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts') <!-- Extra scripts from child pages -->
</body>
</html>
